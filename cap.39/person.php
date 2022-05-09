<?php

// Define Class Person
class Person {
    // Define/declare the fields - Attributes
    public $name;
    public $age;
    
    // Define the constructor
    function __construct() {
        echo "An object was created\n";
    }
    function say_info() {
        echo "I am " . $this -> name, "\n";
        echo "I am " . $this -> age . " years old\n";
    }
}

// Create object Person
$person1 = new Person();

// Assign Values
$person1 -> name = "Shiva";
$person1 -> age = "2500";

// Call the method say_info() of the object person1
$person1 -> say_info();

?>