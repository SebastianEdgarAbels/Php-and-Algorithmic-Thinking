<?php
  echo "Enter a choice: ";
  $x = 4;

  if ($x < 1 || $x > 4) {
    echo "Invalid choice\n";
  }
  else {
    echo "Valid choice\n";

    switch ($x) {
      case 1:
        echo "1st choice selected\n";
        break;
      case 2:
        echo "2nd choice selected\n";
        break;
      case 3:
        echo "3rd choice selected\n";
        break;
      case 4:
        echo "4th choice selected\n";
        break;
    }
  }
?>
