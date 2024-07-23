<?php
function computeSum($a, $b) {
    if ($a == $b) {
        return 3 * ($a + $b);
    } else {
        return $a + $b;
    }
}

// Sample input values
$inputs = [
    [1, 2],
    [3, 2],
    [2, 2]
];

foreach ($inputs as $input) {
    $result = computeSum($input[0], $input[1]);
    echo $result . "\n";
}
?>
