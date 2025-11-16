<?php
namespace app\Controllers;

use app\Models\Product;
use app\Models\Cart;

class StoreController {

    private array $products;
    private Cart $cart;

    public function __construct()
    {
        $this->cart = new Cart();

        // Catalogue des produits
        $this->products = [
            new Product(1, "Chaussures", 25000),
            new Product(2, "T-shirt", 8000),
            new Product(3, "Casquette", 5000),
            new Product(4, "Montre", 15000)
        ];
    }

    public function getProducts() : array {
        return $this->products;
    }

    public function addToCart(int $id)
    {
        foreach ($this->products as $p) {
            if ($p->getId() === $id) {
                $this->cart->add($p);
            }
        }
    }

    public function getCart() : array {
        return $this->cart->getAll();
    }

    public function getCartTotal() : float {
        return $this->cart->total();
    }

    public function removeCart(int $id)
    {
        $this->cart->remove($id);
    }
}
