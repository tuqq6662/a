<?php
function collatz($n) {
    if ($n < 1) {
        return "Input must be a positive integer.";
    }
    
    $sequence = [$n];
    while ($n != 1) {
        if ($n % 2 == 0) {
            $n /= 2;
        } else {
            $n = 3 * $n + 1;
        }
        $sequence[] = $n;
    }
    return $sequence;
}

// Example usage
$number = 12; // You can change this number
$result = collatz($number);
echo "Collatz sequence for $number: " . implode(" -> ", $result);
?>
