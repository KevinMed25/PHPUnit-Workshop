<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Order;
use App\Cart;
use App\Product;
use Exception;
use PhpParser\Node\Expr\Cast\Double;

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

    public function testGetTotalWithTax(): void {
        $this->cart->addProduct(new Product('Laptop', 1000));
        $order = new Order($this->cart, 0.10);  // 10% tax

        $this->assertEquals(1100, $order->getTotalWithTax());
    }

    public function testExceptionOnEmptyCart(): void {
        $this->expectException(Exception::class);
        $order = new Order($this->cart);
        $order->getTotalWithTax();
    }

    public function testGetTotalWithDifferentTaxRate(): void {
        $this->cart->addProduct(new Product('Tablet', 500));
        $order = new Order($this->cart, 0.15);  // 15% tax

        $this->assertEquals(575, $order->getTotalWithTax());
    }

    // Example of using a Stub
    public function testWithStub(): void {
        $cartStub = $this->createStub(Cart::class);
        $cartStub->method('getTotal')->willReturn(500);

        $order = new Order($cartStub, 0.10);
        $this->assertEquals(550, $order->getTotalWithTax());
    }

    // Example of using a Mock
    public function testWithMock():void {
        $cartMock = $this->createMock(Cart::class);
        $cartMock->expects($this->once())
                 ->method('isEmpty')
                 ->willReturn(false);

            // Mock getTotal to return a non-zero value
        $cartMock->method('getTotal')->willReturn(500);

        $order = new Order($cartMock);
        $this->assertFalse($order->getTotalWithTax() == 0);
    }
}
