<?php

namespace farm;
require 'animals.php';
use animals as pet;

class Farm
{
	protected $animals = [];
		
	public function addAnimal(pet\Animal $animal)
	{
		$this->animals[] = $animal;
	}

	public function rollCall()
	{
		shuffle($this->animals);
		foreach ($this->animals as $creature) {
			$creature->say();
		}
	}
}

class BirdFarm extends Farm
{
	private $birdsCount;
	
	public function addAnimal(pet\Animal $bird)
	{
		parent::addAnimal($bird);
		$this->showAnimalsCount();
	}

	private function showAnimalsCount()
	{
		$this->birdsCount++;
		echo "Птиц на ферме: " . $this->birdsCount . "\n";
	}
}

class HoofFarm extends Farm
{
	public function addAnimal(pet\Animal $hoof)
	{
		parent::addAnimal($hoof);
		$hoof->walk();
	}
}

class Farmer
{
	public function addAnimal(Farm $farm, pet\Animal $animal)
	{
		$farm->addAnimal($animal);
	}

	public function rollCall(Farm $farm)
	{
		$farm->rollCall();
	}
}

$cow = new pet\Cow();
$pig = new pet\Pig();
$pig2 = new pet\Pig();
$chiken = new pet\Chiken();
$goose = new pet\Goose();
$turkey = new pet\Turkey();
$horse = new pet\Horse();

$birdFarm = new BirdFarm();
$hoofFarm = new HoofFarm();

$farmer = new Farmer();

$farmer->addAnimal($hoofFarm, $pig);
$farmer->addAnimal($hoofFarm, $horse);
$farmer->addAnimal($hoofFarm, $cow);
$farmer->addAnimal($hoofFarm, $pig2);
$farmer->rollCall($hoofFarm);

$farmer->addAnimal($birdFarm, $chiken);
$farmer->addAnimal($birdFarm, $goose);
$farmer->addAnimal($birdFarm, $turkey);
$farmer->rollCall($birdFarm);





