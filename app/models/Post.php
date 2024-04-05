<?php

namespace app\models;


class Post
{
    //todo make methods here
    public function getAllPostsById($id)
    {
        $query = "select * from posts where id like :id";

        return $this->queryWithParams($query, ['id' => $id], 'app/models/Post');
    }

    public function getAllPosts()
    {
        $query = "select * from posts";
        return $this->fetchAll($query);
    }

    public function getPostById($id)
    {
        $query = "select * from posts where id = :id";
        return $this->queryWithParams($query, ['id' => $id]);
    }

    public function savePost($inputData)
    {
        $query = "insert into posts (title, description) values (:title, :description);";
        return $this->queryWithParams($query, $inputData);
    }

    public function updatePost($inputData)
    {
        $query = "update posts set title = :title, description = :description where id = :id";
        return $this->queryWithParams($query, $inputData);
    }

    public function deleteUser($inputData)
    {
        $query = "delete from posts where id = :id";
        return $this->queryWithParams($query, $inputData);
    }
}