<?php
$a = trim (fgets (STDIN));
if ($a < 1) {
    $y = 5 + $a;
    echo $y;
}
elseif ($a < 5) {
    $y = 23 / $a;
    echo $y;
}
elseif ($a < 10) {
    $y = 5 * $a;
    echo $y;
}
else {
    echo "Error! ";
}
?>

