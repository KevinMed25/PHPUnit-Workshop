<?php

use PHPUnit\Framework\TestCase;
use App\Product;

class ProductTest extends TestCase {

    public function testGetName(): void {
        $product = new Product('Laptop', 1200);
        $this->assertEquals('Laptop', $product->getName());
    }

    public function testGetPrice(): void {
        $product = new Product('Laptop', 1200);
        $this->assertEquals(1200, $product->getPrice());
    }
}
