<?php


//MySQLi or PDO

// connect to database
$conn = mysqli_connect('localhost','test','test123','ninja_pizza');

//check connect
if (!$conn) {
   echo 'Connection error'. mysqli_connect_error();
};

// write query for all pizzas

// $sql = 'SELETE * FROM pizzas'
 $sql = 'SELECT id,titile,ingredients FROM `pizza`';

// make query & get result
$result = mysqli_query($conn,$sql);

// fetch the resulting rows as an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

print_r($pizzas)

?>
<!DOCTYPE html>
<html lang="en">
<?php require('templates/header.php')?>
<?php require('templates/footer.php')?>

</html>