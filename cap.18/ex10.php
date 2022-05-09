<?php

// Data input - prompt the user to enter a number between 1.0 and 4.9
echo "Enter a number between 1.0 and 4.9: ";
$iNr = trim (fgets (STDIN));

// Data processing and Results output
// First I have to think how to transform them so if I took a closer look i will see that
// they are only four posibilities before the comma and after the comma 10 (0 - 9)
$iStrNr = (int)($iNr);
// echo $sStrNr;
$iQ = ($iNr * 10) % 10;
// echo $iQ, "\n";

if($iStrNr == 1) {
    echo "One";
}
elseif($iStrNr == 2) {
    echo "Two";
}
elseif($iStrNr == 3) {
    echo "Three";
}
elseif($iStrNr == 4) {
    echo "Four";
}

echo " Point ";

if($iQ == 0) {
    echo "Zero\n";
}
elseif($iQ == 1) {
    echo "One\n";
}
elseif($iQ == 2) {
    echo "Two\n";
}
elseif($iQ == 3) {
    echo "Three\n";
}
elseif($iQ == 4) {
    echo "Four\n";
}
elseif($iQ == 5) {
    echo "Five\n";
}
elseif($iQ == 6) {
    echo "Six\n";
}
elseif($iQ == 7) {
    echo "Seven\n";
}
elseif($iQ == 8) {
    echo "Eight\n";
}
elseif($iQ == 9) {
    echo "Nine\n";
}

?>