<?php

class Opiniao_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $msg = array(
            "code" => 0,
            "msg" => "Opinião cadastrada com sucesso!"
        );

        try {
            $tipoveiculo = null;
            if ($_POST["tipoveiculo"] == "moto") {
                $tipoveiculo = 0;
            }
            if ($_POST["tipoveiculo"] == "carro") {
                $tipoveiculo = 1;
            }
            if ($_POST["tipoveiculo"] == "caminhao") {
                $tipoveiculo = 2;
            }
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $ano = $_POST["ano"];
            $notageral = $_POST["notageral"];
            $ptspositivos = $_POST["ptspositivos"];
            $ptsnegativos = $_POST["ptsnegativos"];
            $defapr = $_POST["defapr"];
            Session::init();
            $email = trim(Session::get("email"));

            $this->db->insert('opinioes', array(
                'email' => $email,
                'tipoveiculo' => (int)$tipoveiculo,
                'marca' => $marca,
                'modelo' => $modelo,
                'ano' => $ano,
                'notageral' => $notageral,
                'ptspositivos' => $ptspositivos,
                'ptsnegativos' => $ptsnegativos,
                'defapr' => $defapr
            ));
        } catch (Exception $e) {

            $msg = array(
                "code" => 0,
                "msg" => "Houve um erro: " . $e
            );
        }
        echo json_encode($msg);
    }
}
