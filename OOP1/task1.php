<?php

class Cat
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Dog
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    } 
}

class Fish
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    } 
}

$cat1 = new Cat("kitty");
$cat2 = new Cat("ty");
$cat3 = new Cat("kit");

$dog1 = new Dog("woof");
$dog2 = new Dog("woo");
$dog3 = new Dog("wo");
$dog4 = new Dog("w");
$dog5 = new Dog("woofoo");

$fish1 = new Fish("boool");
