<?php

class User extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = $this->model('UserModel');
    }

    public function index($name = '')
    {
        $user = $this->user;
        $user->name = $name;
        $this->view('home/index', ['name' => $name, 'street' => "Street 33"]);
    }

    public function show($var)
    {
        $this->view('user/show', ['var' => $var]);
    }
}

?>