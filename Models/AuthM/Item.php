<?php

namespace Manage;

class Item extends \Database
{
public function getItems() {
    $itemsData  = $this->getAllData("item");
    return $itemsData;
}

    public function getOneItem($condition) {
        $itemData = $this->getOneRow('item', $condition);
        return $itemData;
    }

    public function numItems() {
        $itemCount = $this->num_rows('item');
        return $itemCount;
    }

    public function addItem($data) {
        $this->addRow('item', $data);
    }

    public function deleteItem($condition) {
        $this->deleteRow('item', $condition);
    }

    public function editItem($data, $condition) {
        $this->updateRow('item', $data, $condition);
    }

    public function paginationItem($idpage) {
        $items = $this->pagination('item', 2, $idpage);
        return $items;
    }

    public function getAllItems($condition) {
        $itemsData = $this->getAllDatas("item", $condition);
        return $itemsData;
    }

}