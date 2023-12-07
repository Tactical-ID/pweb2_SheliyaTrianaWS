<?php

include_once '../../config.php';
include_once '../../controllers/VaksinController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id_vaksin=$_GET['id'];

    $vaksinController = new VaksinController($db);
    $result=$vaksinController->deleteVaksin($id_vaksin);

    if($result){
        header("location:vaksin");
    }else{
        echo "Gagal menghapus data";
    }
}