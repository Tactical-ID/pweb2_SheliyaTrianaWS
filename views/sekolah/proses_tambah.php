<?php
include_once '../../config.php';
include_once '../../controllers/SekolahController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama_sekolah = $_POST['nama_sekolah'];
    $alamat = $_POST['alamat'];

    $sekolahController = new SekolahController($db);
    $result = $sekolahController->createSekolah($nama_sekolah, $alamat);

    if ($result) {
        header("location:sekolah");
    } else {
        header("location:tambahSekolah");
    }
}
?>