<?php
require_once "./Controllers/RequestController.php";
require_once "./Controllers/RouterController.php";
require_once "./Controllers/ResponseController.php";
require_once "./Controllers/AuthController.php";

class ApplicationController{

    public RouterController $router;
    public RequestController $request;
    public ResponseController $response;
    public AuthController $auth;


    public function __construct()
    {
        $this->request = new RequestController();
        $this->response = new ResponseController();
        $this->router = new RouterController($this->request,$this->response);
        $this->auth = new AuthController($this->router);

    }

    public function run()
    {
       echo $this->router->resolve();
    }

}

?>