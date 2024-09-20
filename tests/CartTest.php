<?php

use PHPUnit\Framework\TestCase;
use App\Cart;
use App\Product;

class CartTest extends TestCase {

    public function testAddProduct() {
        $cart = new Cart();
        $product = new Product('Laptop', 1200);
        $cart->addProduct($product);

        $this->assertEquals(1, $cart->countItems());
        $this->assertEquals(1200, $cart->getTotal());
    }

    public function testIsEmptyReturnsTrueWhenCartIsEmpty() {
        $cart = new Cart();
        $this->assertTrue($cart->isEmpty());
    }

    public function testIsEmptyReturnsFalseWhenCartIsNotEmpty() {
        $cart = new Cart();
        $product = new Product('Laptop', 1200);
        $cart->addProduct($product);

        $this->assertFalse($cart->isEmpty());
    }

    public function testGetTotalWithMultipleProducts() {
        $cart = new Cart();
        $product1 = new Product('Laptop', 1200);
        $product2 = new Product('Mouse', 50);
        $cart->addProduct($product1);
        $cart->addProduct($product2);

        $this->assertEquals(1250, $cart->getTotal());
    }
}

