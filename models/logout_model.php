<?php

class Logout_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {

        // logout
        Session::init();
        Session::destroy();
        //echo("OK");

        header("Location: " . URL);

        die();
    }
}
