<?php
$foods = array("pasta", "steak", "fish", "potatoes", "pork", "chicken", "prawns");
$food = preg_grep("/s/", $foods);
echo "<pre>";
print_r($food);
?>