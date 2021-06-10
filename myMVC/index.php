<?php
//1. Общие настройки (отображение ошибок только для разработки)
ini_set('display errors', 1);
error_reporting(E_ALL);

//2.Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');

$router = new Router();
$router->run();
var_dump($router->getURI());
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

