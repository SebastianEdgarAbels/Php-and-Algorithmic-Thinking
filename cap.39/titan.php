<?php

// Declare Class Titan
class Titan {
    // Define/declare the fields
    public $name;
    public $gender;

    // Define the constructor
    // the argument or one local variable can have the same name as the field so:
    // the function can be also written function __construct($name, $gender)
    function __construct($n, $g) {      
        echo $this -> name = $n . " " 
        . $this -> gender = $g, "\n";
    }
}

// Create objects
$titan1 = new Titan ("Cronus", "male");
$titan2 = new Titan ("Oceanus", "male");
$titan3 = new Titan ("Rhea", "female");
$titan4 = new Titan ("Phoebe", "female");

?>