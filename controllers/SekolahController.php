<?php

include_once '../../models/sekolah.php';

class SekolahController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Sekolah($db);
    }

    public function getAllSekolah()
    {
        return $this->model->getAllSekolah();
    }

    public function createSekolah($nama_sekolah, $alamat)
    {
        return $this->model->createSekolah($nama_sekolah, $alamat);
    }

    public function getSekolahByID($id_sekolah)
    {
        return $this->model->getSekolahByID($id_sekolah);
    }

    public function updateSekolah($id_sekolah, $nama_sekolah, $alamat)
    {
        return $this->model->updateSekolah($id_sekolah, $nama_sekolah, $alamat);
    }

    public function deleteSekolah($id_sekolah)
    {
        return $this->model->deleteSekolah($id_sekolah);
    }
}