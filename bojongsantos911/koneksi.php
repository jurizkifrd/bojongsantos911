<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'bojongsantos911';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        echo "connection failed";
    }
?>