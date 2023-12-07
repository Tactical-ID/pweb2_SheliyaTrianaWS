<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/VaksinController.php';
require '../../index.php';

//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$vaksinController = new VaksinController($db);
$vaksin = $vaksinController->getAllVaksin();
?>


<!doctype html>
<html lang="en">
<body>

  <section id="kategori" class="hero d-flex align-items-center section-bg">
  <div class="container mb-0 mt-0" >
      <div class="col-md-12">
        <br></br>
      <h3 class="py-3">Data Vaksin</h3>
      <a href="tambahVaksin"class="btn btn-primary mb-2 mt-2">Tambah Vaksin</a>
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Jenis Vaksin</th>
        <th>Aksi</th>
    </tr>
   
        <?php
        $no=1;
        foreach($vaksin as $x ){
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['jenis_vaksin'] ?></td>
            <td>
            <a href="editVaksin?id=<?php echo $x['id_vaksin']; ?>" class="btn btn-warning">Edit</a>
            <a href="hapusVaksin?id=<?php echo $x['id_vaksin'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini')"class ="btn btn-danger">Hapus</a>
            </td>

        </tr>
        <?php
        }
        ?>
</table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 
