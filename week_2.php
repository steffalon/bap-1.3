<?php

$numbers = array('2', '4', '6', '1', '3', '5');
for ($i=0;$i<count($numbers); $i++) {
    echo "<p>$numbers[$i]<p>";
}

$numbers[6] = '9';

for ($i=0;$i<count($numbers); $i++) {
    echo "<p style='color:red'>$numbers[$i]<p>";
}

array_push($numbers, "6", "7");

for ($i=0;$i<count($numbers); $i++) {
    echo "<p style='color:blue'>$numbers[$i]<p>";
  }


$mixed = array('maart', '1', 'januari', '4', '5', 'april', 'juni');

for ($i=0;$i<count($mixed); $i++) {
    echo "<p style='color:green'>$mixed[$i]<p>";
  }

array_unshift($mixed, "number1", "number2");

for ($i=0;$i<count($mixed); $i++) {
    echo "<p style='color:pink'>$mixed[$i]<p>";
  }

?>
