<?php

//global functions go into this file
//functions here can be used in all other controllers

class Controller
{
    public function view($view, $data = [])
    {
        require_once('../app/views/'.$view.'.php');
    }

    public function model($model)
    {
        require_once('../app/models/'.$model.'.php');
        return new $model();
    }
}

?>