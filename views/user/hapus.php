<?php

include_once '../../config.php';
include_once '../../controllers/UserController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $userController = new UserController($db);
    $result=$userController->deleteUser($id);

    if($result){
        header("location:user");
    }else{
        echo "Gagal menghapus data";
    }
}