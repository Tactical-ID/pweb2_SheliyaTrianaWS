<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/UserController.php';
require '../../index.php';

//instansiasi class database
$database=new database;
$db=$database->getKoneksi();

$userController = new UserController($db);
$user = $userController->getAllUser();
?>


<!doctype html>
<html lang="en">

<body>
  <section id="kategori" class="hero d-flex align-items-center section-bg">
  <div class="container mb-0 mt-0" >
      <div class="col-md-12">
        <br></br>
      <h3 class="py-3">Data User</h3>
      <a href="tambahUser"class="btn btn-primary mb-2 mt-2">Tambah User</a>

<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Aksi</th> 
    </tr>
   
        <?php
        $no=1;
        foreach($user as $x ){
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['username'] ?></td>
            <td><?php echo $x['password'] ?></td>
            <td><?php echo $x['level'] ?></td>
            <td>
            <a href="editUser?id=<?php echo $x['id']; ?>" class="btn btn-warning">Edit</a>
            <a href="hapusUser?id=<?php echo $x['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini')"class ="btn btn-danger">Hapus</a>
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
