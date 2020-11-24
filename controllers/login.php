<?php

class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        Session::init();
        if (Session::get("logado") == true) {
            //$this->view->render('header');
            $this->view->render('index/index');
            //$this->view->render('footer');
        } else {
            $this->view->title = 'Login';
            //$this->view->render('header');
            $this->view->render('login/login');
            //$this->view->render('footer');
        }
    }

    function run()
    {
        $this->model->run();
    }
}
