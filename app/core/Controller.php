<?php

//global functions go into this file
//functions here can be used in all other controllers

class Controller
{
    public function view($view, $data = [])
    {
        //load header
        require_once('../app/views/_template/header.php');

        require_once('../app/views/'.$view.'.php');

        //load footer
        require_once('../app/views/_template/footer.php');
    }

    //this is only an example if a different header or footer would be required
    public function viewHome($view, $data = [])
    {
        //load header
        require_once('../app/views/_template/header_home.php');

        require_once('../app/views/'.$view.'.php');

        //load footer
        require_once('../app/views/_template/footer_home.php');
    }

    public function model($model)
    {
        require_once('../app/models/'.$model.'.php');
        return new $model();
    }
}

?>