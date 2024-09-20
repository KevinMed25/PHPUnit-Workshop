<?php

namespace App;

use Exception;

class Order {
    private $cart;
    private $taxRate;

    public function __construct(Cart $cart, $taxRate = 0.10) {
        $this->cart = $cart;
        $this->taxRate = $taxRate;
    }

    public function getTotalWithTax(): float {
        if ($this->cart->isEmpty()) {
            throw new Exception('Cannot process an empty cart');
        }

        $total = $this->cart->getTotal();
        return $total + ($total * $this->taxRate);
    }
}
