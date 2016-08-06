<?php
function __autoload($className) { 
	include_once $className . '.php';
}

$store = new \Data\DatabaseAdapter(new \Data\Drivers\MongoDB());
//$store = new \Data\DatabaseAdapter(new \Data\Drivers\Redis());
//$store = new \Data\DatabaseAdapter(new \Data\Drivers\MySQL());


echo $store->updateStore();