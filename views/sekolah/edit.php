<?php

include_once '../../config.php';
include_once '../../controllers/SekolahController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
   $id_sekolah = $_GET['id'];

   $sekolahController = new SekolahController($db);
   $sekolahData = $sekolahController->getSekolahById($id_sekolah);

   if ($sekolahData) {
       if (isset($_POST['submit'])) {
           $nama_sekolah = $_POST['nama_sekolah'];
           $alamat = $_POST['alamat'];

           $result =$sekolahController->updateSekolah($id_sekolah, $nama_sekolah, $alamat);

           if ($result){
               header("location:sekolah");
           }else {
               header("location:editSekolah");
           }
       }
   } else {
       echo "Sekolah tidak ditemukan";
   }
}
?>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Edit Data Sekolah</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<body>
    <section id="kategori" class="hero d-flex align-items-center section-bg">
    <div class="container mb-0 mt-0" >
    <div class="col-md-12">
        <br></br>
       <h3 class="py-3">Edit Data Sekolah</h3>
       <?php
       if ($sekolahData) {
       ?>
           <form action="" method="post">
               <?php
               foreach ($sekolahData as $d => $value) {
               ?>
                   <div class="mb-3">
                       <label for="<?php echo $d ?>" class="form-label"><?php echo $d ?></label>
                       <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                   </div>
               <?php
               }
               ?>
               <button type="submit" name="submit" class="btn btn-success">Simpan</button>
           </form>
       <?php
       }
       ?>

   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
