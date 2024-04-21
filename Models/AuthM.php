<?php
session_start();
include_once ("../models/UserM.php");
include_once ("../models/TeacherM.php");
include_once ("../models/StudentM.php");
include_once ("../models/Database.php");
$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];
if($type=="admin"){
    $userM = new UserM();
    $result = $userM->getOneUser("manager_username = '$username' and manager_password='$password'");

    if($result!=NULL){

        $_SESSION['username'] = $result['manager_username'];
        $_SESSION['fullname'] = $result['manage_fullname'];
        $_SESSION['id'] =  $result['manager_code'];
        $_SESSION['type']= $type;
        if (isset($_POST['remember'])) {
            $_COOKIE['username']= $username;
            $_COOKIE['password']= $password;

            // Lưu thông tin đăng nhập vào cookie trong 30 ngày
            setcookie('username', $username, time() + (30 * 24 * 60 * 60),'http://localhost/MMO/'); // Thời gian hết hạn sau 30 ngày
            setcookie('password', $password, time() + (30 * 24 * 60 * 60),'http://localhost/MMO/');
            echo $_POST['remember'];

            header('location: ../dashboard');
        }
        else{

            header('location: ../dashboard');
        }


    }
    else{
        echo "<script> alert('Tài khoản hoặc mật khẩu không chính xác')</script>";
        echo "<script> location.href='../'</script>";


    }




}
else if($type=="giangvien"){
    $teacherM = new TeacherM();
    $result = $teacherM->getOneTeacher("teacher_code = '$username' and teacher_password='$password'");

    if($result!=NULL){

        $_SESSION['username'] = $result['teacher_code'];
        $_SESSION['fullname'] = $result['teacher_fullname'];
        $_SESSION['id'] =  $result['teacher_code'];
        $_SESSION['type']= $type;
        if (isset($_POST['remember'])) {
            $_COOKIE['username']= $username;
            $_COOKIE['password']= $password;
            // Lưu thông tin đăng nhập vào cookie trong 30 ngày
            setcookie('username', $username, time() + (30 * 24 * 60 * 60),'http://localhost/MMO/'); // Thời gian hết hạn sau 30 ngày
            setcookie('password', $password, time() + (30 * 24 * 60 * 60),'http://localhost/MMO/');
            echo $_POST['remember'];

            header('location: ../dashboard');
        }
        else{

            header('location: ../dashboard');
        }


    }
    else{
        echo "<script> alert('Tài khoản hoặc mật khẩu không chính xác')</script>";
        echo "<script> location.href='../'</script>";


    }
}
else{
    $StudentM = new StudentM();
    $result = $StudentM->getOneStudent("student_code = '$username' and student_password='$password'");


    if($result!=NULL){

        $_SESSION['student_code'] = $result['student_code'];
        $_SESSION['fullname'] = $result['student_fullname'];
        $_SESSION['id'] =  $result['student_code'];
        $_SESSION['type']= $type;
        if (isset($_POST['remember'])) {
            $_COOKIE['username']= $username;
            $_COOKIE['password']= $password;
            // Lưu thông tin đăng nhập vào cookie trong 30 ngày
            setcookie('username', $username, time() + (30 * 24 * 60 * 60),'http://localhost/MMO/'); // Thời gian hết hạn sau 30 ngày
            setcookie('password', $password, time() + (30 * 24 * 60 * 60),'http://localhost/MMO/');
            echo $_POST['remember'];

            header('location: ../dashboard');
        }
        else{

            header('location: ../dashboard');
        }


    }
    else{
        echo "<script> alert('Tài khoản hoặc mật khẩu không chính xác')</script>";
        echo "<script> location.href='../'</script>";


    }
}





?>