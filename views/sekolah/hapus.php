<?php

include_once '../../config.php';
include_once '../../controllers/SekolahController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id_sekolah =$_GET['id'];

    $sekolahController = new SekolahController($db);
    $result=$sekolahController->deleteSekolah($id_sekolah);

    if($result){
        header("location:sekolah");
    }else{
        echo "Gagal menghapus data";
    }
}