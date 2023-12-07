<?php

include_once '../../config.php';
include_once '../../controllers/VaksinController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
   $id_vaksin = $_GET['id'];

   $vaksinController = new VaksinController($db);
   $vaksinData = $vaksinController->getVaksinById($id_vaksin);

   if ($vaksinData) {
       if (isset($_POST['submit'])) {
           $jenis_vaksin = $_POST['jenis_vaksin'];

           $result =$vaksinController->updateVaksin($id_vaksin, $jenis_vaksin);

           if ($result){
               header("location:vaksin");
           }else {
               header("location:editVaksin");
           }
       }
   } else {
       echo "Vaksin tidak ditemukan";
   }
}
?>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Edit Data Vaksin</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<body>
    <section id="kategori" class="hero d-flex align-items-center section-bg">
    <div class="container mb-0 mt-0" >
    <div class="col-md-12">
        <br></br>
       <h3 class="py-3">Edit Data Vaksin</h3>
       <?php
       if ($vaksinData) {
       ?>
           <form action="" method="post">
               <?php
               foreach ($vaksinData as $d => $value) {
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
<!-- <?php

if ($vaksinData) {
?>
   <form action="" method="post">
       <?php
       foreach ($vaksinData as $d => $value){
       ?>
           <table border='0'>
               <tr>
                   <td width="100">
                       <?php
                       echo $d;
                       ?>
                   </td>
                   <td>
                       <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                   </td>
               </tr>
               <?php
       }
               ?>
               <tr>
                   <td></td>
                   <td>
                   <button type="submit" name="submit" class="btn btn-primary" value="simpan">Simpan</button>
  
                   </td>
               </tr>
           </table>
   </form>
<?php
}
?> -->