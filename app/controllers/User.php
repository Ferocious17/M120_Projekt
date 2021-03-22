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
        $user = $this->model('UserModel');
        $user->name = $name;
        $user->id = 1;
        //$this->view('home/index', ['name' => $name, 'street' => "Street 33"]);

        $firstname = $user->getFirstname();

        $this->view('user/show', ['Firstname' => $firstname]);
    }

    public function show($var)
    {
        $this->view('user/show', ['var' => $var]);
    }
}

?>