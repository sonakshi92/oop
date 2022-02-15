<?php
class House {
	public $primaryColor = 'black';
	public $secondaryColors = [
		'bathroom' => 'white',
		'bedroom' => 'light pink',
		'kitchen' => 'light blue'
	];
	public $hasPool = false;
	public $extra;
	public function changeColor($color) {
		$this -> primaryColor = $color;
	}	
    public function changeColor2() {
        $this -> color = 'white';
        echo $this->color . " <hr>";
    }
    
}
$myHouse = new House();
$friendHouse = new House();
echo $myHouse -> secondaryColors['bathroom'] . "<br>";
echo $friendHouse -> primaryColor . "<br>";

echo $myHouse -> primaryColor . "<br>";

$myHouse -> changeColor('white');
echo $myHouse -> primaryColor . "<br>";

echo "<h3> Class Example </h3><br>";
class Example {
	public function echo($string) {
		echo $string;
	}
}
$example = new Example();
$example -> echo('Hello World <br>');
$myHouse -> changeColor2();



class House2 {
	public $name;
	public $color;
	public function setData($name, $color) {
		$this -> name = $name;
		$this -> color = $color;
	}
	public function echoData() {
		echo "The color of the {$this -> name} is {$this -> color}";
	}
}
$blackHouse = new House2();
$whiteHouse = new House2();
$blackHouse -> setData("John's House", "black");
$whiteHouse -> setData("Pearl's House", "white");
$blackHouse -> echoData();
echo '<br>';
$whiteHouse -> echoData();
