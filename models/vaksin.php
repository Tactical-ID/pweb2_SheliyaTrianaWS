<?php

class Vaksin
{
  private $koneksi;

  public function __construct($db)
  {
      $this->koneksi = $db;
  }

  public function getAllVaksin()
  {
      $query = "SELECT * FROM vaksin";
      $result  = mysqli_query($this->koneksi,$query);
      return $result;
  }

  public function createVaksin($jenis_vaksin)
  {
    $query = " INSERT INTO vaksin (jenis_vaksin)
    values('$jenis_vaksin')";
    $result  = mysqli_query($this->koneksi,$query);
    if ($result) {
      return true;
    }else {
      return false;
    }
  }

  public function getVaksinById ($id_vaksin){
    $query="SELECT * FROM vaksin where id_vaksin = $id_vaksin";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
  }

  public function updateVaksin ($id_vaksin, $jenis_vaksin){
    $query="UPDATE vaksin set jenis_vaksin ='$jenis_vaksin'where id_vaksin ='$id_vaksin'";
    $result = mysqli_query($this->koneksi, $query);
    if ($result){
      return true;
    }else{
      return false;
    }
  }

    public function deleteVaksin($id_vaksin){
      $query ="DELETE FROM vaksin WHERE id_vaksin = $id_vaksin";
      $result = mysqli_query ($this->koneksi, $query);
      if ($result){
         return true;
      }else {
        return false;
      }
    }
}

