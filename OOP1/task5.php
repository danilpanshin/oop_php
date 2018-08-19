<?php

require 'task4.php';

class Order
{
    public $basket;
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }
    
    public function getBasket()
    {
        return $this->basket;
    }

    public function getPrice()
    {
        return $this->basket->getPrice();
    }
} 

class Basket
{
    public $product;
    public $quantity;
    public $positions = [];
    public $price;

    public function addProduct(Product $product, $quantity)
    {
        $this->positions[] = ['product' => $product, 'quantity' => $quantity];    
    }

    public function getPrice()
    {
        foreach ($this->positions as $position) {
            $this->price += $position['product']->getPrice() * $position['quantity'];
        }
        return $this->price;        
    }

    public function describe()
    {
        foreach ($this->positions as $position) {
            print $position['product']->getName() . "-" . $position['product']->getPrice() . "-" . $position['quantity'] . PHP_EOL; //todo
        }         
    }
}

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price) 
    {
        $this->name = $name;         
        $this->price = $price;    
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$lamp = new Product("lamp", 100);
$table = new Product("table", 1000);
$book = new Product("book", 50);

$basket = new Basket;
$basket->addProduct($lamp, 4);
$basket->addProduct($table, 2);
$basket->addProduct($book, 3);
$order = new Order($basket);

$user = new User('Nicolay Nicokaich ', 'nic@mail.com', 'male', 40, '8800555');

$user->notify("для вас создан заказ, на сумму: " . $order->getPrice() . " Состав: " . $basket->describe() . "\n"); //todo не отображается echo

var_dump($basket->describe());



