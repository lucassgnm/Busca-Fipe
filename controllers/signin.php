<?php

class Signin extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->title = 'Página Inicial';
		//$this->view->render('header');
        $this->view->render('signin/signin');
		//$this->view->render('footer');
    }

    function run() {
        $this->model->run();
    }

    function getPaises() {
        $this->model->getPaises();
    }
    
}