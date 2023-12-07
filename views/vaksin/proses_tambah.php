<?php

include_once '../../config.php';
include_once '../../controllers/VaksinController.php';

$database = new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $jenis_vaksin= $_POST['jenis_vaksin'];

    $vaksinController = new VaksinController($db);
    $result=$vaksinController->createVaksin($jenis_vaksin);

    if($result){
        header("location:vaksin"); 
    }else{
        header("location:tambahVaksin");
    }

}