<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($a) {
    $this->name = $a;
    return $this->name; }

  function get_name() {
   
  }

  function set_color($c){
      $this->color = $c;
  }
  function get_color(){
      return $this->color;
  }
}

$apple = new Fruit();
// $banana = new Fruit();
echo $apple->set_name('Appless');
// $banana->set_name('Banana');
//$apple->set_color('Green');
//echo $apple->get_color() . "<br>";
//echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
?>