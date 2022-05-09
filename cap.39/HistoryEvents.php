<?php

// Define a class HistoryEvents
class HistoryEvents {
    // declare/define a public field $day and an public field array events
    public $day;
    public $events = [];

    // define a constructor with a formal argument that accepts an initial val for the field day
    function __construct($day) {
        $this -> day = $day;
    }
}

// Create two objects for two events
$event1 = new HistoryEvents ("4th of July");
$event1 -> events[0] = "1776: Declaration of Independece in US"; 
$event1 -> events[1] = "1810: French troops occupy Amsterdam";

$event2 = new HistoryEvents ("28th of October");
$event2 -> events[0] = "969: Byzantine troops occupy Antioch";
$event2 -> events[1] = "1940: Ohi Day in Greece";

// Call the results
echo $event1 -> day, "\n";
echo $event1 -> events[0], "\n";
echo $event1 -> events[0], "\n";

echo $event2 -> day, "\n";
echo $event2 -> events[0], "\n";
echo $event2 -> events[1], "\n";