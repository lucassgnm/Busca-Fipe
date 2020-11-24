<?php

class ListaOpinioes extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->title = 'Página Inicial';
		//$this->view->render('header');
        $this->view->render('listaopinioes/listaopinioes');
		//$this->view->render('footer');
    }

    function run() {
        $this->model->run();
    }
    
}