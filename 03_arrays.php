<?php

$myArr = [1, 4, 57, 872];

echo $myArr[1];

echo "<br>";

$secondArr = array('Hello', 'World!', 1,2,3,4,5);

echo ($secondArr[3]);

// Associate Arrays

$assocArr = [
  'name' => 'DevJet',
  'age' => 24,
  'sex' => 'Male'
];

echo "<br>";

echo "Name: " . $assocArr['name'] . "<br>";
echo "Age: " . $assocArr['age'] . "<br>";
echo "Sex: " . $assocArr['sex'] . "<br>";

// echo "Name: $assocArr['name'] <br>
//       Age: $age <br>
//       Sex: $sex" ;

?>