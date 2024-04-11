<?php session_start();
require "./Controllers/ApplicationController.php";

$app = new ApplicationController();

$app->router->get('/','home');
$app->router->get('/about','about');
$app->router->get('/gallery','gallery');
$app->router->get('/contact','contact');
$app->router->get('/messages','messages');
$app->router->get('/register',"register");
$app->router->get('/login',"login");

$app->router->post('/register',[AuthController::class,'register']);
$app->router->post('/login',[AuthController::class,'login']);
$app->router->post('/logout',[AuthController::class,'logout']);
$app->router->post('/uploadimg',[ImageController::class,'upload']);
$app->router->post('/sendcontactform',[ContactController::class,'send']);
$app->router->get('/getMessages',[ContactController::class,'getMessages']);

$app->run();
?>