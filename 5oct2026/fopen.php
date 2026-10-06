<?php
// Open a text file for reading purposes
$fh = fopen('../myfile.txt', 'r');

while (!feof($fh)) {

     echo fgets($fh);
     
     }

// Close the file
fclose($fh);
?>