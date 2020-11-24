<?php

class Opiniao extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->title = 'Página Inicial';
        //$this->view->render('header');
        Session::init();
        if (!Session::get("logado")) {
            $this->view->render('login/login');
        } else {
            $this->view->render('opiniao/opiniao');
        }
		//$this->view->render('footer');
    }

    function run() {
        $this->model->run();
    }
}