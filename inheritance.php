<?php
class Person {
	public $name;
	public $age;
	public function __construct($name, $age) {
		$this -> name = $name;
		$this -> age = $age;
	}
	public function introduce() {
		echo "My name is {$this -> name}. My age is {$this -> age} <br> <hr>";
	}
}
/* Tom is inherited from Person */
class Tom extends Person {
	# __construct() is inherited
	# introduce() is inherited
	public function sayHello() {
		echo "Hello, World <br>";
	}
}
$tom = new Tom('Tom', 29);
$tom -> sayHello();
$tom -> introduce();
?>






<?php
class ParentClass {
	protected $protectedProperty = 'Protected';
	private $privateProperty = 'Private';
	protected function protectedMethod() {
		echo $this -> protectedProperty;
		echo $this -> privateProperty;
	}
	private function privateMethod() {
        echo "sds";
		// cannot call this function 
		// from Child
	}
}
class Child extends ParentClass {
	public function doSomething() {
		$this -> protectedMethod();
		echo "<br>abc ". $this -> protectedProperty;
		//echo $this -> privateProperty;
		// $this -> privateMethod(); // invalid
	}
}
$child = new Child();
$child -> doSomething();

// all of following are invalid (only public visibility is accessible from outside)
// echo $child -> protectedProperty;
// echo $child -> privateProperty;
// $child -> protectedMethod();
// $child -> privateMethod();
