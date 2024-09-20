<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Order;
use App\Cart;
use App\Product;
use Exception;

class OrderTest extends TestCase {

    private $cart;

    protected function setUp(): void {
        // This is run before each test method
        $this->cart = new Cart();
    }

    protected function tearDown(): void {
        // This is run after each test method
        $this->cart = null;
    }

    public function testGetTotalWithTax() {

    }

    public function testExceptionOnEmptyCart() {

    }

    public function testGetTotalWithDifferentTaxRate() {

    }

    // Example of using a Stub
    public function testWithStub() {

    }

    // Example of using a Mock
    public function testWithMock() {

    }
}
