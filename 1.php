<?php
class A {
    public $a1=1;
    protected $a2=2;
    private $a3=3;
    public function F1(){
        echo $this -> a1+ $this->$a2;
    }
    public const PI=3.14;
}
$o1=newA();
$o2=new a;
var_dump($o1);
$o1->a1=4;
$o1->F1();//6
$o2->F1();//3
$x=A::PI//
echo $x;//3.14
?>