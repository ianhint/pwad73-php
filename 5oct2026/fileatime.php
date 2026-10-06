<?php
$file = '../myfile.txt';
$timestamp = fileatime($file); // returns the last access time of the file in Unix timestamp format
echo date("Y m d G:i:s", $timestamp);
?>