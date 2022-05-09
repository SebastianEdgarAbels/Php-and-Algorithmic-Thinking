<?php

// Define class Myclass
class MyClass {
    // Define fields - attributes
    public $b; // This is a field
    
    // Define methods/actions
    function myMethod() {
        $b = " *** "; // this is a local variable
        echo $b, $this -> b, $b, "\n";
    }
}

$x = new MyClass();     // Create object x
$x -> b = "Hello!";     // Assign a value to its field
$x -> myMethod();       // It displays: *** Hello! ***

?>