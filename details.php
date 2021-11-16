<?php
include('config/db_connect.php');

// check get request id param
if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //make sql
    $sql = "SELECT * FROM pizza WHERE id=$id";

    //get query result
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($pizza);
}

if (isset($_POST['delete'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    //make sql
    $sql = "DELETE FROM pizza WHERE id=$id";

    //make query
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo 'query error' . mysqli_error($conn);
    }

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($pizza);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require('templates/header.php') ?>

<div class="container center">
    <?php if ($pizza) : ?>

        <h4><?php echo htmlspecialchars($pizza['titile']) ?></h4>
        <p>Create by: <?php echo htmlspecialchars($pizza['email']) ?></p>
        <p>Create at: <?php echo htmlspecialchars($pizza['created_at']) ?></p>
        <h4>Ingredients</h4>
        <p> <?php echo htmlspecialchars($pizza['ingredients']) ?></p>

        <!-- Delete Form -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
            <input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
        </form>

    <?php else : ?>
        <h5>No such pizza exists!</h5>
    <?php endif; ?>

</div>

<?php require('templates/footer.php') ?>

</html>