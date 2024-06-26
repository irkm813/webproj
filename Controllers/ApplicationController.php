<?php
require_once "./Controllers/RequestController.php";
require_once "./Controllers/RouterController.php";
require_once "./Controllers/ResponseController.php";
require_once "./Controllers/AuthController.php";
require_once "./Controllers/ImageController.php";
require_once "./Controllers/ContactController.php";

class ApplicationController{

    public RouterController $router;
    public RequestController $request;
    public ResponseController $response;
    public AuthController $auth;
    public ImageController $img;
    public ContactController $contact;

    public function __construct()
    {
        $this->request = new RequestController();
        $this->response = new ResponseController();
        $this->router = new RouterController($this->request,$this->response);
        $this->auth = new AuthController($this->response);
        $this->img = new ImageController($this->response);
        $this->contact = new ContactController($this->response);
    }

    public function run()
    {
       echo $this->router->resolve();
    }

}

?>