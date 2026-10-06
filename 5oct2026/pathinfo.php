<?php
$path = 'E:\xampp82\htdocs\pwad73_php-main\5oct2026\users.txt';

$info = pathinfo($path);
echo "<pre>";
print_r($info); // returns an array with 'dirname', 'basename', 'extension', and 'filename'


echo $info['basename']; // returns 'users.txt'
echo "<br>";
echo $info['dirname']; // returns 'E:\xampp82\htdocs\pwad73_php-main\5oct2026'
?>