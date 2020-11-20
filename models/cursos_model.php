<?php

class Index_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
    
	public function listaCursos() 
    {  
        $sql="select codigo,nome from escola.curso order by nome";
        $result=$this->db->select($sql);	
		echo(json_encode($result));
    }
	

    public function insert() 
    {
        $x=file_get_contents('php://input');
        $x=json_decode($x);
        $codcurso=$x->txtcodcurso;
        $nomecurso=$x->txtnomecurso;
        
        $result=$this->db->insert('escola.curso', array('codigo' =>$codcurso,'nome'=>$nomecurso));
        if($result){
            $msg=array("codigo"=>1,"texto"=>"Registro inserido com sucesso.");
        }
        else{
            $msg=array("codigo"=>0,"texto"=>"Erro ao inserir.");
        }
        echo(json_encode($msg));
    }
	
	public function del() 
    {  
        
		//o codigo deve ser um inteiro
        $codcurso=(int)$_GET['id'];
        $msg=array("codigo"=>0,"texto"=>"Erro ao excluir.");
		if($codcurso>0){                     
            $result=$this->db->delete('escola.curso',"codigo='$codcurso'");
            if($result){
                    $msg=array("codigo"=>1,"texto"=>"Registro excluído com sucesso.");
            }
        }
        echo(json_encode($msg));        
	}
	
	public function loadData($id) 
    {  
		//o codigo deve ser um inteiro
		$cod=(int)$id;		
         $result=$this->db->select('select codigo,nome from escola.curso where codigo=:cod',array(":cod"=>$cod));
		$result = json_encode($result);
		echo($result);
	}
	
	
	public function save() 
    {
        $x=file_get_contents('php://input');
        $x=json_decode($x);
        $codcurso=(int)$x->txtcodcurso;
        $nomecurso=$x->txtnomecurso;
        $msg=array("codigo"=>0,"texto"=>"Erro ao atualizar.");
		if($codcurso>0){
                $dadosSave=array('nome'=>$nomecurso);
                        
            $result=$this->db->update('escola.curso', $dadosSave,"codigo='$codcurso'");
            if($result){
                    $msg=array("codigo"=>1,"texto"=>"Registro atualizado com sucesso.");
                }
        }
        echo(json_encode($msg));
	   
    }
}