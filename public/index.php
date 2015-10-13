<?php
ini_set("display_errors", 1);
error_reporting(255);


define('ROOT_PATH', 'c:/wamp/www/dom/');
define('ENVIRONMENT', 'dev');
include_once ROOT_PATH . 'manager/controller.php';
Manager_Controller::getInstance()->run();