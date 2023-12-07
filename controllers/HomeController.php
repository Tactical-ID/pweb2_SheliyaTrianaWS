<?php
class HomeController{
    public function home(){
        header("location:http:localhost/mvcStudiKasus/index.php");
    }

    public function sekolah(){
        header("location:http:localhost/mvcStudiKasus/view/sekolah/index.php");
    }

    public function dosen(){
        header("location:http:localhost/mvcStudiKasus/view/dosen/index.php");
    }
}