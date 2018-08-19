<?php

class Forge
{
	public function burn($object)
	{
		$flame = $object->burn();
		echo $flame->render((string)$object) . PHP_EOL;
	}
}

class BlueFlame
{
	public function render($name)
	{
		return $name . " горит синим пламенем";
	}
}

class RedFlame
{
	public function render($name)
	{
		return $name . " горит красным пламенем";
	}
}

class Smoke
{
	public function render($name)
	{
		return $name . " лишь задымился";
	}	
}

class Chair
{
	public function burn()
	{
		return new Smoke();
	}

	public function __toString()
	{
		return get_class($this);
	}

}

class Table
{
	public function burn()
	{
		return new RedFlame();
	}

	public function __toString()
	{
		return get_class($this);
	}
}

$forge = new Forge();
$chair = new Chair();
$table = new Table();
var_dump($forge->burn($chair));
var_dump($forge->burn($table));





