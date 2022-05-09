<?php

// Data input - prompt the user to enter the number of messages sent
echo "Enter the total number of messages sent: ";
$iMsg = trim (fgets (STDIN));

// Data processing and Results output
if($iMsg <= 50) {
    $iExtra = 0;
}
elseif($iMsg <= 150) {
    $iExtra = ($iMsg - 50) * 0.05; 
}
else {
    $iExtra = 100 * 0.05 + ($iMsg - 150) * 0.10;
}

// Add the basic rate of 8$
$iTotalWithoutTaxes = $iExtra + 8;
// Calculate the total taxes
$iLocalTaxes = $iTotalWithoutTaxes * 0.10;
// Total amount to pay
$iTotalAmountToPay = $iLocalTaxes + $iTotalWithoutTaxes;
echo  "Total amount to pay " . sprintf("%.2f",$iTotalAmountToPay) . "$\n";
?>