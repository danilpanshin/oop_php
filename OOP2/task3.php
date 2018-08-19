<?php 

define("CRUSH", "самолет терпит крушение");

class BlackBox
{
	private $data = [];
	public function addLog($message)
	{
		$this->data[] = $message; 
	}

	public function getDataByEngineer(Engineer $engineer)
	{
		$engineer->decodeBox($this->data);
	}
}

class Plane
{
	private $blackBox;
	private $logs = ["воздушная яма", "набор высоты", "зона турбулентности", "полёт нормальный", "снижение высоты"];
	
	public function __construct()
	{
		$this->blackBox = new BlackBox();
	}

	public function flyAndCrush()
	{
		$this->flyProcess();
		$this->crushProcess();
	}

	public function flyProcess()
	{
		$this->addLog($this->logs[array_rand($this->logs)]);
		$this->addLog($this->logs[array_rand($this->logs)]);
		$this->addLog($this->logs[array_rand($this->logs)]);
	}

	public function crushProcess()
	{
		$this->addLog(CRUSH);
	}

	protected function addLog($message)
	{
		$this->blackBox->addLog($message);
	}

	public function getBoxForEngineer(Engineer $engineer)
	{
		$engineer->setBox($this->blackBox);
	}
}

class Engineer
{
	public function setBox(BlackBox $blackBox)
	{
		$blackBox->getDataByEngineer($this);
	}

	public function takeBox(Plane $plane)
	{
		$plane->getBoxForEngineer($this);
	}

	public function decodeBox($data)
	{
		foreach($data as $result) {
    		echo $result, '<br>';
		}
	}
}

$plane = new Plane();
var_dump($plane->flyAndCrush());
$engineer = new Engineer();
$engineer->takeBox($plane);







