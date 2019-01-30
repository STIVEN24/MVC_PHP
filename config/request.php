<?php
namespace config;
class request
{
    private $controller;
    private $method;
    private $parameter;

    public function __construct()
    {
        if ( isset($_GET['url']) )
        {
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            $url = array_filter($url);
            
            if ($url[0] == "index.php")
            {
                $this->controller = "user";
            } else {
                $this->controller = strtolower(array_shift($url));
            }
            $this->method = strtolower(array_shift($url));
            if (!$this->method)
            { $this->method = 'index'; }
            $this->parameter = $url;
        } else {
            $this->controller = 'user';
            $this->method = 'read';
        }
    }
    public function getController()
    {
        return $this->controller;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function getParameter()
    {
        return $this->parameter;
    }
}