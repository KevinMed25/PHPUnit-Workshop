<?php declare(strict_types=1); //obligamos a cumplir con los tipos de datos

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test; // Permite quitar "test" al numbre del método de test
use PHPUnit\Framework\Attributes\TestDox; //Sirve para añadir uns descripción a la prueba
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

    #[Test] //alternativa a usar testAddProduct como nombre de la funnción y que sea reconocida.
    #[TestDox('Método AddProduc - agrega un producto al carrito de compra')]
    public function AddProduct() {
        $product = new Product('Laptop', 1000);
        $this->cart->addProduct($product);
        $this->assertNotNull($this->cart->getProducts(), 'Product should not be null');
        $this->assertTrue($this->cart->countItems() > 0, 'Cart should have items');
    }

    public function testClearCart() {
        $this->cart->addProduct(new Product('Laptop', 1000));
        $this->cart->clearCart();
        $this->assertTrue($this->cart->isEmpty(), 'Cart should be empty');
        $this->assertNull($this->cart->getProducts()[0] ?? null, 'Product should be null after cart is cleared');
    }

    public function testTotalCalculation() {
        $product1 = new Product('Laptop', 1000);
        $product2 = new Product('Phone', 500);
        $this->cart->addProduct($product1);
        $this->cart->addProduct($product2);

        $this->assertEquals(1500, $this->cart->getTotal());
        $this->assertNotEquals(1600, $this->cart->getTotal());
    }

    public function testIsEmptyReturnsTrueWhenCartIsEmpty() {
        $this->assertTrue($this->cart->isEmpty(), 'Cart should be empty initially');
    }

    public function testIsEmptyReturnsFalseWhenCartIsNotEmpty() {
        $this->cart->addProduct(new Product('Laptop', 1000));
        $this->assertFalse($this->cart->isEmpty(), 'Cart should not be empty after adding a product');
    }
}