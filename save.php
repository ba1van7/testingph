<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("data.txt", "a") or die("Unable to open file"); // open file, create if doesn't exist
    $txt = "$username $password\n"; // store data as username password
    fwrite($file, $txt); // write to our file
    fclose($file); // close the file handle

    echo 'Your username and password are stored in our database. Change it soon!';
} else {
    // Handle other HTTP methods or direct access to the file
    http_response_code(405);
    echo 'Method Not Allowed';
}
