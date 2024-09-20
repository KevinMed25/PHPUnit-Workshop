<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase {

    public function testGetTotalWithTax() {
        $cart = new Cart();
        $cart->addProduct(new Product('Laptop', 1000));
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
        $cart.addProduct(new Product('Tablet', 500));
        $order = new Order($cart, 0.15);  // 15% tax

        $this->assertEquals(575, $order->getTotalWithTax());
    }
}
?>
