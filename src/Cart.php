<?php

class Cart {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getTotal() {
        $total = 0;
        foreach ($products as $product) {
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
}
?>