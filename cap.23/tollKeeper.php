<?php

// Data input - prompt the user to enter his type of vehicle
echo "Enter the correspondig letter for your type of vehicle (M, C or T): ";
$sVehicle = strtoupper (trim (fgets (STDIN)));

// Data processing and Results output
// Data Validation Process
if($sVehicle == "M") {
    echo "Vehicle Typ: Motorcyle -> Amount to pay: $1\n"; 
}
elseif ($sVehicle == "C") {
    echo "Vehicle Typ: Car -> Amount to pay: $2\n";
}
elseif ($sVehicle == "T") {
    echo "Vehicle Typ: Truck -> Amount to pay: $4\n";
}
else {
    echo "Invalid Vehicle Type\n";
}
?>