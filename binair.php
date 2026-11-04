<?php 

function binarysearch($array, $target, $low, $high) {
    // when low is higher than high, the target number is not found
    if ($low > $high) {
        return false;
    }

    // calculates the middle of the array
    $mid = intdiv($low + $high, 2);

    // when the number is found
    if ($array[$mid] == $target) {
        return true;
    }

    // when the middle number is higher than the target number, the search continues in the left half of the array
    elseif ($array[$mid] > $target) {
        return binarysearch($array, $target, $low, $mid - 1);
    }

    // if the middle number is lower than the target number, the search continues in the right half of the array
    else {
        return binarysearch($array, $target, $mid + 1, $high);
    }
}

// makes a list of numbers (for example from 10 to 1000 in steps of 10)
$numbers = range(10, 10000, 10); // this makes  a clean sorted array sorted from 100

// choose a number to search for in the list
$target = 500; // if this number is changed it wil search for the inputtted number

// starts timer
$start_time = microtime(true);

// runs the binary search function
// low begins at 0 and high at the last index of the array
$result = binarysearch($numbers, $target, 0, count($numbers) - 1);

// stops timer
$end_time = microtime(true);

// shows the result on the screen
echo "<h3>Result of the binary search:</h3>";
echo "Searching for the number: " . $target . "<br>";

if ($result) {
    echo "The target number is found!";
} else {
    echo "The target number is not found!";
}

?>