<?php
session_start();

require 'Controllers/ShopController.php';

$action = ( !empty($_GET["route"]) ? $_GET["route"] : "index" );

$shop = new ShopController();
$shop->$action();