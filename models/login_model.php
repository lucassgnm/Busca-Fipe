<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        try {
            $email = trim($_POST['email']);
            $pwd = $_POST['pwd'];

            $result = $this->db->select("select count(*) totalusuarios
                                        from buscafipe.usuarios u 
                                        where u.email = :email and u.senha = :senha", array(":email" => $email, ":senha" => hash("sha256", $pwd)));

            if ($result[0]->totalusuarios == 1) {
                $msg = array(
                    "code" => 1,
                    "msg" => "Login permitido."
                );
                Session::init();
                Session::set('email', $email);
                Session::set('logado', true);
            } else {
                $msg = array(
                    "code" => 0,
                    "msg" => "Login não permitido."
                );
            }
        } catch (Exception $e) {

            $msg = array(
                "code" => 0,
                "msg" => "Houve um erro: " . $e
            );
        }
        echo json_encode($msg);
    }
}
