<?php


//MySQLi or PDO

// connect to database
$conn = mysqli_connect('localhost', 'test', 'test123', 'ninja_pizza');

//check connect
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
};


?>