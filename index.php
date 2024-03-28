<?php session_start();
require "./Controllers/ApplicationController.php";

$app = new ApplicationController();
$app->router->get('/','home');
$app->router->get('/about','about');
$app->router->get('/gallery','gallery');
$app->router->get('/contact','contact');
$app->router->get('/messages','messages');

$app->router->get('/register',[ResponseController::class,'']);
$app->router->get('/login',[ResponseController::class,'']);
$app->router->post('/register',[AuthController::class,'']);
$app->router->post('/login',[AuthController::class,'']);

$app->run();

?>

