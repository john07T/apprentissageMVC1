<?php
session_start();

use Src\Controllers\StoreController;

spl_autoload_register(function ($class) {
    $class = str_replace("\\", "/", $class);
    require __DIR__ . "/" . $class . ".php";
});

$store = new StoreController();

if (!empty($_GET["remove"])) {
    $store->removeCart($_GET["remove"]);
}

$cart  = $store->getCart();
$total = $store->getCartTotal();

require "views/cartView.php";
