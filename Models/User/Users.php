<?php

namespace User;

class Users extends \Database
{

    public function getUsers() {
        $usersData  = $this->getAllData("users");
        return $usersData;
    }

    public function getOneUser($condition) {
        $userData = $this->getOneRow('users', $condition);
        return $userData;
    }

    public function numUsers() {
        $userCount = $this->num_rows('users');
        return $userCount;
    }

    public function addUser($data) {
        $this->addRow('users', $data);
    }

    public function deleteUser($condition) {
        $this->deleteRow('users', $condition);
    }

    public function editUser($data, $condition) {
        $this->updateRow('users', $data, $condition);
    }

    public function paginationUser($idpage) {
        $users = $this->pagination('users', 2, $idpage);
        return $users;
    }

    public function getAllUsers($condition) {
        $usersData = $this->getAllDatas("users", $condition);
        return $usersData;
    }

}