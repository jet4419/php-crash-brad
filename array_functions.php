<?php

// Search array

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Will return "1" if it's true, otherwise none
echo in_array(40, $numbers);

// Add items on array

$numbers[] = 45;
var_dump($numbers);

echo "<br>";
echo "<br>";
echo "<br>";

array_push($numbers, 'hey', 'yow');

var_dump($numbers);

echo "<br>";
echo "<br>";
echo "<br>";

// Remove items on array
// array_pop($numbers); // remove last item
// array_shift($numbers); // remove first item
// unset($numbers[1]); // remove specific item

// var_dump($numbers);

echo "<br>";
echo "<br>";
echo "<br>";

$chunked_arr = array_chunk($numbers, 2);

print("<pre>".print_r($chunked_arr,true)."</pre>");

// var_dump($chunked_arr);




?>