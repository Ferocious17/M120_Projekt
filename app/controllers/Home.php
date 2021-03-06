<?php

class Home extends Controller
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

    public function createTable($param1, $param2, $param3, $param4)
    {
        $this->view('home/index', ['params' => [$param1, $param2, $param3, $param4]]);
    }
}

?>