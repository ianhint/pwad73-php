<?php
  $book = "../phpbook.pdf";
  $bytes = filesize($book); // returns the size of the file in bytes

  $kb = round($bytes / 1024, 2); // convert bytes to kilobytes and round to 2 decimal places
  echo $kb; // returns the size of the file in kilobytes
?>