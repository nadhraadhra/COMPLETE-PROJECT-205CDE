<?php

//Establish Connection with Database

$user = 'root';
$password = 'root';
$db = 'userRegistration';
$host = 'localhost';
$port = '8889';

$link = mysqli_init();
$success = mysqli_real_connect
(
        $link,
        $host,
        $user,
        $password,
        $db,
        $port
        
);


if (mysqli_connect_error()) {
    die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

echo 'Connect Successfully.';

$mysqli->close();

?>

