<?php

class User
{
  private $koneksi;

  public function __construct($db)
  {
      $this->koneksi = $db;
  }

  public function getAllUser()
  {
      $query = "SELECT * FROM user";
      $result  = mysqli_query($this->koneksi,$query);
      return $result;
  }

  public function createUser($username, $password, $level)
  {
    $query = " INSERT INTO user (username, password, level)
    values('$username', '$password', '$level')";
    $result  = mysqli_query($this->koneksi,$query);
    if ($result) {
      return true;
    }else {
      return false;
    }
  }

  public function getUserById ($id){
    $query="SELECT * FROM user where id = $id";
    $result = mysqli_query($this->koneksi, $query);
    return mysqli_fetch_assoc($result);
  }

  public function updateUser ($id, $username, $password, $level){
    $query="UPDATE user set username='$username', password='$password', level='$level'where id ='$id'";
    $result = mysqli_query($this->koneksi, $query);
    if ($result){
      return true;
    }else{
      return false;
    }
  }

    public function deleteUser($id){
      $query ="DELETE FROM user WHERE id = $id";
      $result = mysqli_query ($this->koneksi, $query);
      if ($result){
         return true;
      }else {
        return false;
      }
    }
}

