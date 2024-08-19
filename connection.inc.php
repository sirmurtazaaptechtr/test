<?php
    session_start();
    include('functions.inc.php');
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test_db';

    if($conn = mysqli_connect($hostname,$username,$password,$database)) {
        echo "$database is connected successfully";
    }else {
        echo "Connection Failed!";
        die();
    }