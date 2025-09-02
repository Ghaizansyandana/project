<?php

$total = 600000;
$diskon = 0;

if ($total > 500000) {
    $disc = 0.2 * $total;
} elseif ($total > 300000) {
    $disc = 0.1 * $total;
} else {
    $disc = 0;
}

echo "Total belanja =" . $total . "<br>";
echo "Total discount =" . $disc . "<br>";
echo "Total after discount =" . ($disc - $total) . "<br>";

?>