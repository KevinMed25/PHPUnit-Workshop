<?php

namespace App;

class Cart {
    private $products = [];

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    public function getTotal(): float {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function countItems(): int {
        return count($this->products);
    }

    public function isEmpty(): bool {
        return empty($this->products);
    }

    public function getProducts(): array {
        return $this->products;
    }

    public function clearCart(): void {
        $this->products = [];
    }
}
