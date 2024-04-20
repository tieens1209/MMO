<?php

namespace Manage;

class Bill extends \Database
{
    public function getBills() {
        $billsData  = $this->getAllData("bills");
        return $billsData;
    }

    public function getOneBill($condition) {
        $billData = $this->getOneRow('bills', $condition);
        return $billData;
    }

    public function numBills() {
        $billCount = $this->num_rows('bills');
        return $billCount;
    }

    public function addBill($data) {
        $this->addRow('bills', $data);
    }

    public function deleteBill($condition) {
        $this->deleteRow('bills', $condition);
    }

    public function editBill($data, $condition) {
        $this->updateRow('bills', $data, $condition);
    }

    public function paginationBill($idpage) {
        $bills = $this->pagination('bills', 2, $idpage);
        return $bills;
    }

    public function getAllBills($condition) {
        $billsData = $this->getAllDatas("bills", $condition);
        return $billsData;
    }
}