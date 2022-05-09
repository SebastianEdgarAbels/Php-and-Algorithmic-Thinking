<?php
echo "Enter your four-digit PIN : "; 
$pin = trim(fgets(STDIN));
if ($pin != 1234) {
    echo "Wrong PIN. Enter your four-digit PIN : "; 
    $pin = trim(fgets(STDIN));
    if ($pin != 1234) {
        echo "Wrong PIN. Enter your four-digit PIN : ";
        $pin = trim(fgets(STDIN)); 
    }
}
if ($pin != 1234) { 
    echo "PIN locked!\n";
} 
else {
    echo "Enter the amount of money (an integer value) that you want to withdraw: "; 
    $amount = trim(fgets(STDIN));
    $usd10 = (int)($amount / 10);
    $r = $amount % 10;
    $usd5 = (int)($r / 5);
    $usd1=$r%5;
    echo $usd10, " note(s) of $10 ", $usd5, " note(s) of $5 "; 
    echo "and ", $usd1, " note(s) of $1\n";
} 
?>
