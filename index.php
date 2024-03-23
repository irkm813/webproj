<?php session_start();
require "./Controllers/ApplicationController.php";

$app = new ApplicationController();
$app->router->get('/','home');

$app->router->get('/register',[ResponseController::class,'']);
$app->router->get('/login',[ResponseController::class,'']);
$app->router->post('/register',[AuthController::class,'']);
$app->router->post('/login',[AuthController::class,'']);

$app->run();

?>

