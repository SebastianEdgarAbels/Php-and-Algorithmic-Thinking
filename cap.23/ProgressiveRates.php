<?php

// Data input - prompt the user to enter the total nr of kWh consumed
echo "Enter the total number of kWh consumed: ";
$iKwh = trim (fgets (STDIN));

// Data processing and Results output
if($iKwh <= 500) {
    $iRes = $iKwh * 0.10;
}
elseif($iKwh <= 2000) {
    $iRes = 500 * 0.10 + ($iKwh - 500) * 0.25;
}
elseif($iKwh <=4500) {
    $iRes = 500 * 0.10 + 1500 * 0.25 + ($iKwh - 2000) * 0.40;
}
else {
    $iRes = 500 * 0.10 + 1500 * 0.25 + 2500 * 0.40 + ($iKwh - 4502) * 0.60;
}
echo "Total amount to pay: " . $iRes, "\n";
?>