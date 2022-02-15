<?php
class Fruit {
  public $name;
  public $color;

  function __construct() {
    $this->name = 'Apple';
    $this->color="Purple";
  }
  function get_name() {
    return "Welcome " . $this->name . "<br> Color is ". $this->color. "<hr>";
  }
}

$apple = new Fruit();
echo $apple->get_name();
?>

<?php
class House {
	public $name;
	public $color;
	public function __construct($name, $color) {
		$this -> name = $name;
		$this -> color = $color;
    echo " This is construct <br>";
	}
	public function echoData() {
		echo "The color of the {$this -> name} is {$this -> color} <br>";
	}
  public $name1 ="Destruct function.";
  public function __destruct() {
		echo "Welcome to the {$this -> name1} The default color is {$this -> color}";
	}
}
$blackHouse = new House("John's House", "black");
$blackHouse -> echoData();
