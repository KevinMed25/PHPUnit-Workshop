<?php

namespace App;

class Cart {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function countItems() {
        return count($this->products);
    }

    public function isEmpty() {
        return empty($this->products);
    }

    public function getProducts() {
        return $this->products;
    }

    public function clearCart() {
        $this->products = [];
    }
}
