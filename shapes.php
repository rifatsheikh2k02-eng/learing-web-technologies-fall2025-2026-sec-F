<?php
// Declaring the 2D array
$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
// Print shape 1 (numbers)
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>";
// Print shape 2 (letters)
for ($i = 0; $i < 3; $i++) {
    for ($j = 3 - $i; $j < 4; $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}

?>
