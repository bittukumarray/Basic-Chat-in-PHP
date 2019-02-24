<?php

$host = "localhost";
$user = "bittu";
$pass = "bittu";
$db_name = "chat";

// mysql -u root -p -h localhost
// CREATE USER 'francesco'@'localhost' IDENTIFIED BY 'some_pass';
// CREATE DATABASE shop;
// GRANT ALL PRIVILEGES ON shop.* TO 'francesco'@'localhost';
// quit;
// mysql -u francesco -p -h localhost

$conn = mysqli_connect($host, $user, $pass, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
    echo "Chat Box :--";
}

function formateDate($date){
    return date('g:i a', strtotime($date));
}


?>