<?php

class AC{ //Base, parent, super
	public $model = "xyz ";
	public $speed = 15;	
	function __construct($m){
		echo "Hello ";
		echo $this->model=$m;
		echo $this->speed++ . " ";
		echo $this->speed++ . " ";
	}
	public function speedUp(){
		echo $this->speed++;
	}
	public function speedDown(){
		return $this->speed--;
	}
}

class SmartAC extends AC{ //derived, sub, child
	public $t = "Smart ";
	public $wifi = true;
	function __construct(){
		echo "child ";
		parent:: __construct("Samsum ");
	}
}

$AC1 = new AC("name1 ");
echo $AC1->model; //if construct wasnt created the o/p is xyz
echo $AC1->model="Voltas";//overriding
echo $AC1->model;
echo $AC1->speedDown();
echo $AC1->speedDown();
echo $AC1->speedDown();
echo $AC1->speedDown();
echo $AC1->speedDown();
echo $AC1->speedDown();
echo "<br>";
$AC2 = new AC("name2 ", 456);//it doent give error for 2nd arg
$AC2->speedUp();
$AC2->speedUp();
$AC2->speedUp();
echo $AC1->speedDown();
echo "<br>";

$Sac1 = new SmartAC();
echo "<br>";
echo $Sac1->model;
echo $Sac1->t;

?>