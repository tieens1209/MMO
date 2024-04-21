<?php

namespace Manage;

class posts extends \Database
{
    public function getPosts() {
        $postsData  = $this->getAllData("posts");
        return $postsData;
    }

    public function getOnePost($condition) {
        $postData = $this->getOneRow('posts', $condition);
        return $postData;
    }

    public function numPosts() {
        $postCount = $this->num_rows('posts');
        return $postCount;
    }

    public function addPost($data) {
        $this->addRow('posts', $data);
    }

    public function deletePost($condition) {
        $this->deleteRow('posts', $condition);
    }

    public function editPost($data, $condition) {
        $this->updateRow('posts', $data, $condition);
    }

    public function paginationPost($idpage) {
        $posts = $this->pagination('posts', 2, $idpage);
        return $posts;
    }

    public function getAllPosts($condition) {
        $postsData = $this->getAllDatas("posts", $condition);
        return $postsData;
    }
}