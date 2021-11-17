<?php
session_start();

// if($_SERVER['QUERY_STRING'] == 'logout'){
// unset($_SESSION['name']);
// };
$name = $_SESSION['name'] ?? 'Guest';

//get cookie

$gender = $_COOKIE['gender'] ?? 'unknown';

// echo $gender;



?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Pizza</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .brand{
        background-color: #cbb09c !important;
    }
    .brand-text{
        color: #cbb09c !important;
        font-size: 2rem;
    }
    form{
        max-width: 460px;
        margin: 20px auto;
        padding: 20px;
    }
    .pizza{
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
    .more-info{
        color: #cbb09c !important;
        text-align: center;
        font-size: 92%;
    }
    .card-item{
        height: 280px;
    }
    .card-body{
        height: 150px;
    }
</style>
</head>
<body class="grey lighten-4">
<nav class="white z-depth-0">

<div class="container">
    <a href="index.php" class=" brand-text">Ninja Pizza</a>
    <ul id="nav-mobile" class="right ">
       
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
    </ul>
</div>
</nav>
    