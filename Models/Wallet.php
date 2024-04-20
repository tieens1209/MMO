<?php

class Wallet
{
    public function getWallets() {
        $walletsData  = $this->getAllData("wallets");
        return $walletsData;
    }

    public function getOneWallet($condition) {
        $walletData = $this->getOneRow('wallets', $condition);
        return $walletData;
    }

    public function numWallets() {
        $walletCount = $this->num_rows('wallets');
        return $walletCount;
    }

    public function addWallet($data) {
        $this->addRow('wallets', $data);
    }

    public function deleteWallet($condition) {
        $this->deleteRow('wallets', $condition);
    }

    public function editWallet($data, $condition) {
        $this->updateRow('wallets', $data, $condition);
    }

    public function paginationWallet($idpage) {
        $wallets = $this->pagination('wallets', 2, $idpage);
        return $wallets;
    }

    public function getAllWallets($condition) {
        $walletsData = $this->getAllDatas("wallets", $condition);
        return $walletsData;
    }
}