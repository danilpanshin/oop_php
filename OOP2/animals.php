<?php

namespace animals;

class Animal 
{
	public function say()
	{

	}

	public function walk()
	{

	}	
}

class Bird extends Animal
{
	public function walk()
	{
		$this->tryToFly();	
	}

	protected function tryToFly()
	{
		echo "Вжих-Вжих-топ-топ";
	}
}

class Hoof extends Animal
{
	public function walk()
	{
		echo 'top-top';
	}
}

class Cow extends Hoof 
{
	public function say() 
	{
		echo "мууууу" . "\n";
	}
}

class Pig extends Hoof
{
	public function say()
	{
		echo 'hru-hru' . "\n";
	}
}

class Chiken extends Bird
{
	public function say()
	{
		echo 'coo-ca-re-coo' . "\n";
	}
}

class Goose extends Bird
{
	public function say()
	{
		echo "Ga-ga-ga" . "\n";
	}
}

class Turkey extends Bird
{
	public function say()
	{
		echo "ggggggggg" . "\n";
	}
}

class Horse extends Hoof
{
	public function say()
	{
		echo "I-go-go" . "\n";
	}
}