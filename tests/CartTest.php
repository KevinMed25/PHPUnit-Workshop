<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Cart;
use App\Product;

class CartTest extends TestCase {

    private $cart;

    protected function setUp(): void {
        // This is run before each test method
        $this->cart = new Cart();
    }

    protected function tearDown(): void {
        // This is run after each test method
        $this->cart = null;
    }

    public function testAddProduct() {

    }

    public function testClearCart() {

    }

    public function testTotalCalculation() {

    }

    public function testIsEmptyReturnsTrueWhenCartIsEmpty() {

    }

    public function testIsEmptyReturnsFalseWhenCartIsNotEmpty() {

    }
}
