<?php
ini_set('display_errors', 1);
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
require_once __DIR__.'/vendor/autoload.php';
require __DIR__."/App/Rotas/Rotas.php";
$rotas = new App\Rotas\Rotas($_GET['uri']);

$rotas->get('home', 'PageController@home');
