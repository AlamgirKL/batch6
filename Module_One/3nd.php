<?php

// Step 1: Input units consumed from the user
echo "Enter the number of units consumed: ";
$units = (int)readline();

// Step 2: Calculate the bill using if-else for different slabs
$bill = 0;

if ($units <= 100) {
    $bill = $units * 5; // $5 per unit for 1 to 100 units
} elseif ($units <= 200) {
    $bill = (100 * 5) + (($units - 100) * 10); // $5 for first 100 units, $10 for the next 100 units
} else {
    $bill = (100 * 5) + (100 * 10) + (($units - 200) * 15); // $5 for first 100 units, $10 for next 100, and $15 for remaining
}

// Step 3: Display the total bill
echo "Total units consumed: $units" ;
echo "Total electricity bill: $" . $bill ;

?>
