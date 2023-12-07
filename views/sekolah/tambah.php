<?php
require '../../index.php';
?>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tambah Data Sekolah</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<body>
    <section id="kategori" class="hero d-flex align-items-center section-bg">
    <div class="container mb-0 mt-0" >
    <div class="col-md-12">
        <br></br>

<div class="px-4 py-8">
<h3 class="py-3">Tambah Data Sekolah</h3>
<form action = "proses_tambahSekolah" method ="post">

<div class="mb-3">
    <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
    <input type="text" class="form-control" name="nama_sekolah">
</div>
<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat"></textarea>
</div>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-success" onclick="showAlert()"></td>
        </tr>
</form>

</div>

<script>
    function showAlert(){
        alert ("Data Dosen berhasil ditambahkan")
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>