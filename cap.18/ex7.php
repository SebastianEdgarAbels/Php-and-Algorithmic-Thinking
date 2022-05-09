<?php

echo "1. Convert USD to Euro (EUR)\n";
echo "2. Convert USD to British Pound Sterling (GBP)\n";
echo "3. Convert USD to Japanese Yen (JPY)\n";
echo "4. Convert USD to Canadian Dollar (CAD)\n";

// Data input - prompt the user to enter one of the four choises and an amount in US dollar
echo "Choose the value you want to receive (1 - 4): ";
$iVal = trim (fgets (STDIN));
echo "Enter the amount you want to exchange from Us to the value that belongs to the number " . $iVal . " you choosed\n";
$iAmount = trim (fgets (STDIN));

// Data processing and Results output
if($iVal == 1) {
    echo "You selected 1. Convert USD to Euro (EUR)\n
    $1 = 0.87 EUR (€)\n";
    $iSumExchanged = $iAmount * 0.87;
    echo "You received: " . $iSumExchanged, " Euro (EUR)\n";
}
elseif($iVal == 2) {
    echo "You selected 2. Convert USD to British Pound Sterling (GBP)\n
    $1 = 0.78 GBP\n";
    $iSumExchanged = $iAmount * 0.78;
    echo "You received: " . $iSumExchanged, " British Pound Sterling (GBP)\n";
}
elseif($iVal == 3) {
    echo "You selected 3. Convert USD to Japanese Yen (JPY)\n
    $1 = 108.55 JPY\n";
    $iSumExchanged = $iAmount * 108.55;
    echo "You received: " . $iSumExchanged . " Japanese Yen (JPY)\n";
}
elseif($iVal == 4) {
    echo "You selected 4. Convert USD to Canadian Dollar (CAD)\n
    $1 = 1.33 CAD\n";
    $iSumExchanged = $iAmount * 1.33;
    echo "You received: " . $iSumExchanged . " Canadian Dollar (CAD)\n";
}

?>