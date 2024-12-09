<?php
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
;