
<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "MMO";
    private $mysqli;
    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }
    function num_rows($table){
        $sql= "SELECT * from $table";
        $result = $this->query($sql);

        $numRows = mysqli_num_rows($result);
        return $numRows;


    }
// Hàm khởi tạo lệnh query
    public function query($sql) {
        $result = $this->mysqli->query($sql);

        if ($result === false) {
            die("Query failed: " . $this->mysqli->error);
        }

        return $result;
    }
    function getAllData($tableName){
        $SQL = "SELECT * FROM $tableName";
        $sql_query = $this->query($SQL);
        while ($row = mysqli_fetch_assoc($sql_query)) {
            $results[] = $row;
        }
        if(isset($results)){

            return $results;
        }
    }

    function getAllDatas($tableName,$condition){
        $SQL = "SELECT * FROM $tableName where $condition";

        $sql_query = $this->query($SQL);
        while ($row = mysqli_fetch_assoc($sql_query)) {
            $results[] = $row;
        }

        if(isset($results)){
            return $results;
        }



    }
    function addRow($tableName,$data){
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $SQL = "INSERT INTO $tableName ($columns) VALUES ($values)";

        $sql_query = $this->query($SQL);

    }
    function insertMany($tableName, $dataArray) {
        if (empty($dataArray)) {
            return; // Exit function if data array is empty
        }

        $columns = implode(", ", array_keys($dataArray[0]));
        $values = array();
        foreach ($dataArray as $data) {

            $rowValues = array_map(function($value) {
                return "'" . $value . "'";
            }, array_values($data));

            $values[] = "(" . implode(", ", $rowValues) . ")";

        }
        $SQL = "INSERT INTO $tableName ($columns) VALUES " . implode(", ", $values);



        $sql_query = $this->query($SQL);



        return $sql_query; // Return the query result if required
    }

    public function pagination($tableName,$limit,$idpage){
        // Thiết lập giới hạn dữ liệu trên mỗi trang

        // Tính toán tổng số dữ liệu
        $sql = "SELECT COUNT(*) as total FROM $tableName";
        $result = $this->query($sql);;
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
        $total_pages = ceil($total_records / $limit);
        $current_page = $idpage / 1;
        $start = ($current_page - 1) * $limit;
        $sql = "SELECT * FROM $tableName LIMIT $start, $limit";
        $result = $this->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($row);
            $results[] = $row;
        }
        if(isset($results)){
            return $results;
        }
    }
    public function paginationPro($tableName,$limit,$idpage,$condition){

        $sql = "SELECT * FROM $tableName where $condition ";


        $result = $this->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($row);
            $results[] = $row;
        }
        if(isset($results)){
            return $results;
        }
    }
    // Hàm phân trang
    public function paginationfilter($tableName, $condition){

        $sql = "SELECT * FROM $tableName where $condition ";

        $result = $this->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            // var_dump($row);
            $results[] = $row;
        }
        if(isset($results)){
            return $results;
        }
    }

    function deleteRow($table, $condition) {
        $sql = "DELETE FROM $table WHERE $condition";

        $this->query($sql);

    }
    function updateRow($tableName, $data, $condition) {
        $setValues = "";
        foreach ($data as $key => $value) {
            $setValues .= "$key = '$value', ";
        }
        $setValues = rtrim($setValues, ", ");
        $SQL = "UPDATE $tableName SET $setValues WHERE $condition";

        $sql_query = $this->query($SQL);


    }
    function getOneRow($tableName,$condition){
        $SQL = "SELECT * FROM $tableName WHERE $condition ";

        $sql_query = $this->query($SQL);
        $results = mysqli_fetch_assoc($sql_query);
        if(isset($results)){
            return $results;
        }
    }
    function getListRow($tableName,$condition){
        $SQL = "SELECT * FROM $tableName WHERE $condition ";

        $sql_query = $this->query($SQL);
        while ($row = mysqli_fetch_assoc($sql_query)) {
            // var_dump($row);
            $results[] = $row;
        }
        if(isset($results)){
            return $results;
        }
    }

    public function close() {
        $this->mysqli->close();
    }

}

?>