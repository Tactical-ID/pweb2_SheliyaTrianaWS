<?php

class Sekolah
{
  private $koneksi;

  public function __construct($db)
  {
      $this->koneksi = $db;
  }

  public function getAllSekolah()
  {
      $query = "SELECT * FROM sekolah";
      $result  = mysqli_query($this->koneksi,$query);
      return $result;
  }

  public function createSekolah($nama_sekolah, $alamat)
  {
    // $query = "INSERT INTO sekolah (nama_sekolah, alamat) VALUES ('$nama_sekolah', '$alamat')";
    // $result = mysqli_query($this->koneksi, $query);


    $query = " INSERT INTO sekolah (nama_sekolah, alamat)
    values('$nama_sekolah', '$alamat')";
    $result  = mysqli_query($this->koneksi,$query);
    if ($result) {
      return true;
    }else {
      return false;
    }
  }

  public function getSekolahById ($id_sekolah){
    $query="SELECT nama_sekolah, alamat FROM sekolah where id_sekolah = $id_sekolah";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
  }
  // $query = "SELECT nama_sekolah, alamat FROM sekolah WHERE id_sekolah = $id_sekolah";
    
  public function updateSekolah ($id_sekolah, $nama_sekolah, $alamat){
    $query="UPDATE sekolah set nama_sekolah='$nama_sekolah', alamat='$alamat'where id_sekolah ='$id_sekolah'";
    $result = mysqli_query($this->koneksi, $query);
    if ($result){
      return true;
    }else{
      return false;
    }
  }

    public function deleteSekolah($id_sekolah){
      $query ="DELETE FROM sekolah WHERE id_sekolah = $id_sekolah";
      $result = mysqli_query ($this->koneksi, $query);
      if ($result){
         return true;
      }else {
        return false;
      }
    }
}

