<?php

class Romans {
    private $_number; // Declare field numbers as private

    // Define the method get - the getter
    // This approach is too lonng and could get even longer if i need/want to expand
    // function getRoman() {
    //     if ($this -> _number == 1) {
    //         return "I";
    //     }
    //     else if ($this -> _number == 2) {
    //         return "II";
    //     }
    //     else if ($this -> _number == 3) {
    //         return "III";
    //     }
    //     else if ($this -> _number == 4) {
    //         return "IV";
    //     }
    //     else if ($this -> _number == 5) {
    //         return "V";
    //     }
    //     else {
    //         throw new Exception ("");
    //     }
    // }

    // Define the getter
    function getNumber() {
        return $this -> _number;    // Assign the field to the object
    }

    // Define the setter
    function setNumber($value) {
        if ($value >= 1 && $value <= 5) {
            $this -> _number = $value;      // Formal argument that is var $value is assigned to object's field 
        }
        else {
            throw new Exception("Number not recognized ");
        }
    }

    // Define the getter
    function getRoman() {
        $number2roman = [1 => "I", 2 => "II", 3 => "III", 4 => "IV", 5 => "V"];
        return $number2roman[$this -> _number];
    }

    // Define the setter
    function setRoman($value) {
        $roman2number = ["I" => 1, "II" => 2, "III" => 3, "IV" => 4, "V" => 5];     // elementul de tip int de pe pozitia 0 al arrayului $roman2number apartine key'ului de tip strin"I"
        
        if (array_key_exists($value, $roman2number)) {
            $this -> _number = $roman2number[$value];
        }
        else {
            throw new Exception("Roman numeral not recognized ");
        }
    }
}

$x = new Romans();      // Instantiate object x

$x -> setNumber(3);     // Object calls the method with its formal argument
echo $x -> getNumber(), "\n";   // It display: 3
echo $x -> getRoman(), "\n";    // It display: III

$x -> setRoman("V");
echo $x -> getNumber(), "\n"; // It display: 5 --- > how ? 
echo $x -> getRoman(), "\n"; // It display: V


?>