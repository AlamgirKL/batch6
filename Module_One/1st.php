<?php

// Option 1: Input the number through the terminal
echo "Enter a number: ";
$number = (int) readline();

if ($number > 0) {
    echo "The number $number is positive."; 
} elseif ($number < 0) {
    echo "The number $number is negative." ;
} else {
    echo "The number is zero." ;
}

?>
