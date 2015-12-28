<?php 
#1.общие настройки
ini_set('display_errors',1); #отображение ошибок
error_reporting(E_ALL);


#2.Подключение файлов системы
define('ROOT',dirname(__FILE__));
require_once(ROOT.'/router.php');


#3.Соединение с БД

#4.Вызов Router
$router = new Router;
$router->run();
?>