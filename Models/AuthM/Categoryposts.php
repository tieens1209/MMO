<?php

namespace Manage;

class Categoryposts extends \Database
{
    public function getCategoryposts() {
        $categorypostsData  = $this->getAllData("categoryposts");
        return $categorypostsData;
    }

    public function getOneCategorypost($condition) {
        $categorypostData = $this->getOneRow('categoryposts', $condition);
        return $categorypostData;
    }

    public function numCategoryposts() {
        $categorypostCount = $this->num_rows('categoryposts');
        return $categorypostCount;
    }

    public function addCategorypost($data) {
        $this->addRow('categoryposts', $data);
    }

    public function deleteCategorypost($condition) {
        $this->deleteRow('categoryposts', $condition);
    }

    public function editCategorypost($data, $condition) {
        $this->updateRow('categoryposts', $data, $condition);
    }

    public function paginationCategorypost($idpage) {
        $categoryposts = $this->pagination('categoryposts', 2, $idpage);
        return $categoryposts;
    }

    public function getAllCategoryposts($condition) {
        $categorypostsData = $this->getAllDatas("categoryposts", $condition);
        return $categorypostsData;
    }
}