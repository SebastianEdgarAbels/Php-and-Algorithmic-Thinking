<?php

class FahrenheitToCelsius {
    // public $temperature;    // This is a field that can be still be initialized outside the class cuz of the scope public
    private $_temperature;      // Declare field temperature as private

    // Define the constructor
    function __construct($value) {
        // Call the setter
        $this -> setTemperature($value);    // Use a method to set the value of the field temperature
    }

    // This method gets the temperature
    function getTemperature() {
        return sprintf("%.2f", 5.0 / 9.0 * ($this -> _temperature - 32.0)); // referinta adica se refera la Field(atribut)
    }

    // This method sets the temperature
    function setTemperature($value) {
        if ($value >= -459.67) {
            $this -> _temperature = $value; // Here the field is initialized, set the value of the field $temperature
        // Remember! - everytime I want to change the value of the field $temperature,
        //              I have to use each time the method setTemperature()
        }
        else {
            throw new Exception("There is no temperature below -459.67");
        }
    }
}

$x = new FahrenheitToCelsius(-50);  // Create object x - object is instantiated.
                                    // The constructor is called which, in turn, calls the setter.
echo $x -> getTemperature(), "\n";  // This calls the getter.

$x -> setTemperature(-65);      // This calls the setter.
echo $x -> getTemperature(), "\n"; // This calls the getter.

// $x -> _temperature = -40;       // This is NOT permitted!
// echo $x -> _temperature, "\n";  // This is NOT permitted as well!

?>