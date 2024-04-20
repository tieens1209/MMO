<?php

namespace Manage;

class Review extends \Database
{
    public function getReviews() {
        $reviewsData  = $this->getAllData("reviews");
        return $reviewsData;
    }

    public function getOneReview($condition) {
        $reviewData = $this->getOneRow('reviews', $condition);
        return $reviewData;
    }

    public function numReviews() {
        $reviewCount = $this->num_rows('reviews');
        return $reviewCount;
    }

    public function addReview($data) {
        $this->addRow('reviews', $data);
    }

    public function deleteReview($condition) {
        $this->deleteRow('reviews', $condition);
    }

    public function editReview($data, $condition) {
        $this->updateRow('reviews', $data, $condition);
    }

    public function paginationReview($idpage) {
        $reviews = $this->pagination('reviews', 2, $idpage);
        return $reviews;
    }

    public function getAllReviews($condition) {
        $reviewsData = $this->getAllDatas("reviews", $condition);
        return $reviewsData;
    }
}