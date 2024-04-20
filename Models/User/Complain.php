<?php

namespace User;

class Complain extends \Database
{
    public function getComplains() {
        $complainsData  = $this->getAllData("complains");
        return $complainsData;
    }

    public function getOneComplain($condition) {
        $complainData = $this->getOneRow('complains', $condition);
        return $complainData;
    }

    public function numComplains() {
        $complainCount = $this->num_rows('complains');
        return $complainCount;
    }

    public function addComplain($data) {
        $this->addRow('complains', $data);
    }

    public function deleteComplain($condition) {
        $this->deleteRow('complains', $condition);
    }

    public function editComplain($data, $condition) {
        $this->updateRow('complains', $data, $condition);
    }

    public function paginationComplain($idpage) {
        $complains = $this->pagination('complains', 2, $idpage);
        return $complains;
    }

    public function getAllComplains($condition) {
        $complainsData = $this->getAllDatas("complains", $condition);
        return $complainsData;
    }
}