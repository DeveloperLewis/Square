<?php
/** @var object $router */
$router->get('/user/register', function () {
    require_once('controllers/user/register.php');
});

$router->get('/user/login', function () {
    require_once('controllers/user/login.php');
});