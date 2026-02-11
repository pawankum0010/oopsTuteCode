<?php
//Method Signature Only: Interfaces can only contain method signatures (name, parameters, and return type). They cannot contain any code inside the methods.

//Public Visibility: All methods declared in an interface must be public.

//No Properties: You cannot define variables (properties) in an interface, though you can define constants.

//Multiple Implementation: A single class can implement multiple interfaces, which is a way to get around PHP’s rule that a class can only extend one parent class.

interface parrent1 {

    function add($a, $b);
}
interface parrent2 {

    function sub($c, $d);
}
class childClass implements parrent1, parrent2 {
    public function add($a, $b) {
        echo $a + $b;
    }

    public function sub($a, $b) {
        echo $a - $b;
    }
}

$test1 = new childClass();
$test1->add(10, 11);
echo "<br>";
$test1->sub(10, 11);
