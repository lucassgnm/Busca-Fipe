<?php

class Porque extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->title = 'Página Inicial';
		//$this->view->render('header');
        $this->view->render('porque/porque');
		//$this->view->render('footer');
    }
    
}