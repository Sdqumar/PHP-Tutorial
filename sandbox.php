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
// if (isset($_POST['submit'])) {

// //cookie for gender

// setcookie('gender', $_POST['gender'], time() + 564000);

// session_start();

// $_SESSION['name'] = $_POST['name'];

// header('Location: index.php');
// };

// $file = 'readme.txt';
// if (file_exists($file)) {

//     //read file
//     echo readfile($file).'<br>';

//     //copy file
//     copy($file, 'quote.txt');

//     //absolute path
//     echo realpath($file).'<br>';

//     //file size
//     echo filesize($file).'<br>';

//     //rename size
//     rename($file, 'text.txt').'<br>';

// }else{
//     echo 'file does not exist';
// }

//make directory

// mkdir('images');


// file system 2


$file = 'text.txt';

//open file
$handle = fopen($file, 'a+');

// read file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

//read a single line
// echo fgets($handle);
// echo fgets($handle);

// read a single character
// echo fgetc($handle);

// writing to file
echo fwrite($handle, "\n Everything will be ok");

fclose($handle);
unlink('quote.txt');
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
    <!-- <input type="text" name="name">
    <select name="gender" id="">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <input type="submit" value="submit" name="submit"> -->
</form>
</body>
</html>