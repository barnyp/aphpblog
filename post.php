<?php
/**
 * Created by PhpStorm.
 * User: Paul Barnabas
 * Date: 6/17/2017
 * Time: 12:27 PM
 */
    require('config/config.php');
    require('config/db.php');

    //get ID
    $id = mysqli_real_escape_string($connect, $_GET['id']);

    //Create Query
    $query = "SELECT * FROM posts WHERE  id =".$id;

    //Get Result
    $result = mysqli_query($connect, $query);

    //Fetch Data
    $post = mysqli_fetch_assoc($result);
    //var_dump($post);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($connect);
?>

<?php include('inc/header.php'); ?>

<!-- This is the body of the homepage-->
<div class="container">
    <a href="<?php echo ROOT_URL; ?>blog.php" class="btn btn-default">BACK TO BLOG</a>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <p class="text-default"><?php echo $post['body']; ?></p>
    <hr>
</div>

<?php include('inc/footer.php'); ?>
