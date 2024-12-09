<?php
class B{
    public $b1=1;
    public $b2=2;
    function __construct($b1,$b2=4){
        $this->b1=$b1;
        $this->b2=$b2;
    }
    public function __destruct(){
        echo $this->b1 + $this->b2;
    }
    public function F(){
        echo $this->b1;
    }
    const n=100;
}
$b1 = new B(3,6);
$b1 -> f();
$b1=null;
var_dump($b1);
$b2 =new B(2);
$b2 -> b2=14;
$b2 -> F();
echo B::n;
class C{
    public $c1=10;
    public function F1() {
        return new B($this -> c1);
    }
}
$c1 = new C();
$c2= $c1->F1();
$c2 -> F();

?>