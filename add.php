<?php
include('config/db_connect.php');

$email = $title = $ingredients = '';

$errors= ['email'=>'','title'=>'','ingredients'=>''];

if(isset($_POST['submit'])){

//Check email
if(empty($_POST['email'])){
    $errors['email']="An email is required <br>";
}else{
    $email =$_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']="Invalid Email Address <br>";
    }
}

//Check title
if(empty($_POST['title'])){
    $errors['title']="A title is required <br>";
}else{
    $title =$_POST['title'];
    if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
        $errors['title']="Title must be letters and spaces only <br>";
    }
}

//Check ingredients
if(empty($_POST['ingredients'])){
    $errors['ingredients']= "At latest one ingredients is required <br>";
}else{
    $ingredients =$_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
        $errors['ingredients']= "Ingredients must be a comma separted list <br>";
    }
    if(!array_filter($errors)){


        $email = mysqli_real_escape_string($conn, $email);
        $title = mysqli_real_escape_string($conn, $title);
       $ingredients = mysqli_real_escape_string($conn,$ingredients);

// create sql
$sql= "INSERT INTO pizza(title,email,ingredients) VALUES('$title','$email','$ingredients')";


//  save to db and check
if (mysqli_query($conn,$sql)) {
    header("Location: index.php");

}else{
echo  'query error:' . mysqli_error($conn);
};

    };
}
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require('templates/header.php')?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST" class="white">
        <label for="Email">Your Email:</label>
        <input type="text" name='email' value="<?php echo $email?>">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label for="Email">Pizza Title:</label>
        <input type="text" name='title' value="<?php echo $title?>">
        <div class="red-text"><?php echo $errors['title'] ?></div>

        <label for="Email">Ingredients (comma separated):</label>
        <input type="text" name='ingredients' value="<?php echo $ingredients ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        
        <div class="center">
            <input type="submit" value="submit" name='submit'class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php require('templates/footer.php')?>

</html>