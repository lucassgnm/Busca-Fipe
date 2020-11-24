<?php

class ListaOpinioes_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        try {
            $result = $this->db->select("SELECT id, email, marca, modelo, ano, notageral, ptspositivos, ptsnegativos, defapr, tipoveiculo
            FROM opinioes");
        } catch (Exception $e) {
        }
        echo json_encode($result);
    }
}
