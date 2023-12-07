<?php

include_once '../../models/vaksin.php';

class VaksinController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Vaksin($db);
    }

    public function getAllVaksin()
    {
        return $this->model->getAllVaksin();
    }

    public function createVaksin($jenis_vaksin)
    {
        return $this->model->createVaksin($jenis_vaksin);
    }

    public function getVaksinByID($id_vaksin)
    {
        return $this->model->getVaksinByID($id_vaksin);
    }

    public function updateVaksin($id_vaksin, $jenis_vaksin)
    {
        return $this->model->updateVaksin($id_vaksin, $jenis_vaksin);
    }

    public function deleteVaksin($id_vaksin)
    {
        return $this->model->deleteVaksin($id_vaksin);
    }
}