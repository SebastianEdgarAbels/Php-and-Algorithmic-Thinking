<?php

// Defining a Class Car 
// A Class is a Template

class Car {

    // Define/declare the fields(attributes)

    public $brand = "";
    public $model = "";
    public $color = "";
    public $license_plate = "";

    // Define methods (actions)

    // Define method turn_on()
    function turn_on() {
        echo "The car turns on\n";
    }

    // Define method turn_off()
    function turn_off() {
        echo "The car turns off\n";
    }

    // Define methode accelerate()
    function accelerate() {
        echo "The car accelerates\n";
    }
}

// Creating two objects - means instantiation of two objects, also said two instances
$car1 = new Car();
$car2 = new Car();

// Assigning Values to their Fields : ObjectName -> FieldName/Method I want to acces
// Assigning Values to Object Car1 to it's Fields
$car1 -> brand = "Fiat";
$car1 -> model = "Stilo";
$car1 -> color = "Blue";
$car1 -> license_plate = "R-IG-888";

// Assigning Values to Object Car2 to it's Fields
$car2 -> brand = "Range Rover";
$car2 -> model = "Evoque";
$car2 -> color = "Red";
$car2 -> license_plate = "R-IG-999";

echo $car1 -> brand;
echo $car2 -> brand;

// Call the method turn_off() of the object car1 
$car1 -> turn_off();
// Call the method accelerate() of the object car2
$car2 -> accelerate();

?>