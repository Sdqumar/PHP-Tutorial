<?php

if(isset($_POST['submit'])){

//Check email
if(empty($_POST['email'])){
echo "An email is required <br>";
}else{
    echo htmlspecialchars($_POST['email']) ;
}

//Check title
if(empty($_POST['title'])){
echo "An title is required <br>";
}else{
    echo htmlspecialchars($_POST['title']) ;
}

//Check ingredients
if(empty($_POST['ingredients'])){
echo "An ingredients is required <br>";
}else{
    echo htmlspecialchars($_POST['ingredients']) ;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require('templates/header.php')?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>

    <form action="add.php"  method="POST" class="white">
        <label for="Email">Your Email:</label>
        <input type="text" name='email'>
        <label for="Email">Pizza Title:</label>
        <input type="text" name='title'>
        <label for="Email">Ingredients (comma separated):</label>
        <input type="text" name='ingredients'>
        <div class="center">
            <input type="submit" value="submit" name='submit'class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php require('templates/footer.php')?>

</html>