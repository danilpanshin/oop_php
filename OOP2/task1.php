<?php

class Animal 
{
	public function say()
	{

	}

	public function walk()
	{
		echo 'top-top';
	}
}

class Farm
{
	public $animals = [];

	public function addAnimal(Animal $animal)
	{
		$this->animals[] = $animal;
		$animal->walk();
	}

	public function rollCall()
	{
		shuffle($this->animals);
		foreach ($this->animals as $an) {
			$an->say();
		}
	}
}

class Cow extends Animal 
{
	public function say() 
	{
		echo "мууууу" . "\n";
	}
}

class Pig extends Animal
{
	public function say()
	{
		echo 'hru-hru' . "\n";
	}
}

class Chiken extends Animal
{
	public function say()
	{
		echo 'coo-ca-re-coo' . "\n";
	}
}

$cow = new Cow();
$pig = new Pig();
$chiken = new Chiken();

$farm = new Farm();

var_dump($farm->addAnimal($cow));
var_dump($farm->addAnimal($pig));
var_dump($farm->addAnimal($chiken));
var_dump($farm->animals);
var_dump($farm->rollCall());


