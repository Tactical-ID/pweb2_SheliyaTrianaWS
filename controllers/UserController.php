<?php

include_once '../../models/user.php';

class UserController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new User($db);
    }

    public function getAllUser()
    {
        return $this->model->getAllUser();
    }

    public function createUser($username, $password, $level)
    {
        return $this->model->createUser($username, $password, $level);
    }

    public function getUserByID($id)
    {
        return $this->model->getUserByID($id);
    }

    public function updateUser($id, $username, $password, $level)
    {
        return $this->model->updateUser($id, $username, $password, $level);
    }

    public function deleteUser($id)
    {
        return $this->model->deleteUser($id);
    }
}