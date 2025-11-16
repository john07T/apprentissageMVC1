<?php
namespace Src\Models;

class Cart {

    public function __construct()
    {
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = [];
        }
    }

    public function add(Product $product)
    {
        $_SESSION["cart"][$product->getId()] = [
            "name"  => $product->getName(),
            "price" => $product->getPrice()
        ];
    }

    public function remove(int $id)
    {
        if (isset($_SESSION["cart"][$id])) {
            unset($_SESSION["cart"][$id]);
        }
    }

    public function getAll() : array
    {
        return $_SESSION["cart"];
    }

    public function total() : float
    {
        $total = 0;
        foreach ($_SESSION["cart"] as $item) {
            $total += $item["price"];
        }
        return $total;
    }
}

?>