<?php

//ternery operator
// $score = 50;
// echo $score > 40 ? 'higer score' : 'low score';

// superglobals

// $_GET['name'], $_POST['name'];

// echo $_SERVER['SERVER_NAME'].'<br>';
// echo $_SERVER['REQUEST_METHOD'].'<br>';
// echo $_SERVER['SCRIPT_FILENAME'].'<br>';
// echo $_SERVER['PHP_SELF'].'<br>';
// echo $_SERVER['REQUEST_METHOD'].'<br>';
//sessions
if (isset($_POST['submit'])) {

session_start();

$_SESSION['name'] = $_POST['name'];

header('Location: index.php');
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name">
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>