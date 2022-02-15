<?php 
class Add{
    public $num1;
    public $num2;

    // function sum($n1, $n2){
    //    $this->num1 = $n1;
    //    $this->num2 = $n2;
    //     $this->add = $this->num1 + $this->num2;
    //     echo "Sum of $n1 and $n2 is: ";
    //     return $this->add;
    // }
    function sum($a, $b){
        $this->num1 = $a;
        $this->num2 = $b;
         $this->add = $this->num1 + $this->num2;
         echo "Sum is: ";
         return $this->add;
     }
    function nint($start, $end){
        $this->num1 = $start;
        $this->num2 = $end;
        for($i=$this->num1; $i<=$this->num2; $i++){
            echo " $i <br>";
        }
    }
    function triangle($rows){
        $this->n = $rows;
        for($i=$this->n; $i>=1; $i--){
            for($j=1; $j<=$i; $j++){
            echo " * ";
            }
        echo "<br>";
        }
    }
}
//$sums = new Add();
//When you dont have construct you can create object without parentheses.
$sums = new Add;
 $sums->num1=25;
 $sums->num2=20;
echo $sums->sum(10,20) . "<br>";
echo $sums->sum(20, 30) . "<br>";
echo $sums->sum(100, 30). "<br>";
$s = new Add;
echo $s->sum(1, 10) . "<br>";
echo $s->nint(1, 10) . "<br>";
$s->triangle(4);
 $s->triangle(5);

?>