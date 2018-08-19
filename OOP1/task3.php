<?php

class Toy 
{
    public $name;
    public $price;

    public function __construct($name, $price) 
    {
        $this->name = $name;         
        $this->price = $price;
    }
}

class ToyFactory
{
    public function createToy($name)
    {
       return new Toy($name, rand(0, 100));
    }
}

$namesArray = ["cvcv", "dfdfdf", "sdds", "sdsdd", "sdsss",
               "sss", "qwwqqw", "dsds", "wqqwq", "mhmhhm",
               "yuuy", "weww", "qqqq", "ioiio", "erererr",
               "cvcv", "ewwew", "errff", "wqqqq", "dfdddf" 
];

$randNumberNames = rand(5, 20);
$rand_keys = array_rand($namesArray, $randNumberNames);
$factory = new ToyFactory;

for($i = 0; $i < $randNumberNames; $i++) {
    $toy = $factory->createToy($namesArray[$rand_keys[$i]]);
    echo $toy->name . " - " . $toy->price;
    echo "<br>";
    $sum += $toy->price;
}

echo "Итого - " . $sum;


