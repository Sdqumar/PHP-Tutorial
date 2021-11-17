<?php

//Get Heroku ClearDB connection information
$cleardb_url = parse_url("mysql://b7dd185ede6486:4be4ba64@eu-cdbr-west-01.cleardb.com/heroku_f187988c2c7c1f7?reconnect=true");
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

//MySQLi or PDO

// connect to database
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

//check connect
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
};


?>