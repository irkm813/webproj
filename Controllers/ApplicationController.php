<?php
require_once "./Controllers/RequestController.php";
require_once "./Controllers/RouterController.php";
require_once "./Controllers/ResponseController.php";

class ApplicationController{

    public RouterController $router;
    public RequestController $request;
    public ResponseController $response;

    public function __construct()
    {
        $this->request = new RequestController();
        $this->response = new ResponseController();
        $this->router = new RouterController($this->request,$this->response);
    
    }

    public function run()
    {
       echo $this->router->resolve();
    }

}

?>