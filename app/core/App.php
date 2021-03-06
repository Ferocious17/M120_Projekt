<?php

//routing goes in this file

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() 
    {
        $url = $this->parseURL();

        if (isset($url[0]) && file_exists('../app/controllers/'.$url[0].'.php'))
        {
            $this->controller = $url[0]; 
            unset($url[0]);
        }
        /*else
        {
            echo 'Error 404<br>The wanted resource could not be found<br>';
        }*/

        require_once('../app/controllers/'.$this->controller.'.php');
        $this->controller = new $this->controller;

        if (isset($url[1]))
        {
            if (method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url']))
        {
            return explode('/', rtrim($_GET['url'], '/'));
        }
    }
}

?>