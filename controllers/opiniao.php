<?php

class Opiniao extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->title = 'Página Inicial';
		//$this->view->render('header');
        $this->view->render('opiniao/opiniao');
		//$this->view->render('footer');
    }
    
}