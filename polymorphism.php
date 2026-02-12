<?php

// In Opps when a message can display more than one form that’s called Polymorphism.
// Suppose we have an interface named with Shape and method calcArea(). When Shape implements in class 
// Circle then it’s calculated area and also when Shape implements in class Rectangle then also this calculates area.

// Overloding
interface Shape{
    function calculateArea($a,$b=0);
}
class Circle implements Shape{
    public function calculateArea($a,$b=0){
        return pi() * $a;
    }
}
class Reactangle implements Shape{
    public function calculateArea($a,$b=0){
        return $a * $b;
    }
}
//$circle = new Circle();
//echo $circle->calculateArea(10);
$Reactangle = new Reactangle();
echo $Reactangle->calculateArea(10,2);
