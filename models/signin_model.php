<?php

class Signin_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPaises()
    {
        /* $dados=array(':cpf' => $_POST['txtcpf'],':senha' => $_POST['txtsenha']);
        $result = $this->db->select("SELECT cpf,nome FROM dbclientes.cliente WHERE 
                cpf = :cpf AND senha = sha2(:senha,256)",$dados);
                
        $count = count($result);

        if ($count > 0) {
            // login
            Session::init();
            Session::set('nome', $result[0]->nome);
            Session::set('logado', true);
            Session::set('cpf', $result[0]->cpf);
            echo("OK");
        } else {
            echo("Dados Incorretos."); */

        $sql = "select id, nome_pt from buscafipe.pais order by nome_pt";
        $result = $this->db->select($sql);
        echo (json_encode($result));
    }

    public function run()
    {
        $msg = array(
            "code" => 0,
            "msg" => "Usuário cadastrado com sucesso!"
        );

        try {
            $email = trim($_POST['email']);
            $pwd = $_POST['pwd'];
            $pais = (int)$_POST['pais'];

            $result = $this->db->select("select count(*) totalusuarios
                                        from buscafipe.usuarios u 
                                        where u.email = :email", array(":email" => $email));

            if ($result[0]->totalusuarios != 0) {
                $msg = array(
                    "code" => 2,
                    "msg" => "Esse usuário já foi cadastrado em nosso banco de dados."
                );
            } else {
                $this->db->insert(
                    'usuarios',
                    array(
                        'email' => $email,
                        'senha' => hash("sha256", $pwd),
                        'pais' => $pais
                    )
                );
                Session::init();
                Session::set('email', $email);
                Session::set('logado', true);
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
