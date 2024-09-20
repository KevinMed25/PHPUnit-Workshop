<?php

use PHPUnit\Framework\TestCase;
use App\Cart;
use App\Product;
use App\Order;

class OrderTest extends TestCase {

    public function testGetTotalWithTax() {
        $cart = new Cart();
        $cart->addProduct(new Product('Laptop', 1000));  // Use -> here
        $order = new Order($cart, 0.10);  // 10% tax

        $this->assertEquals(1100, $order->getTotalWithTax());
    }

    public function testExceptionOnEmptyCart() {
        $cart = new Cart();
        $order = new Order($cart);

        $this->expectException(Exception::class);
        $order->getTotalWithTax();
    }

    public function testGetTotalWithDifferentTaxRate() {
        $cart = new Cart();
        $cart->addProduct(new Product('Tablet', 500));  // Corrected line
        $order = new Order($cart, 0.15);  // 15% tax

        $this->assertEquals(575, $order->getTotalWithTax());
    }
}