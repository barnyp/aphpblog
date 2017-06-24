<?php
/**
 * Created by PhpStorm.
 * User: Paul Barnabas
 * Date: 6/17/2017
 * Time: 12:26 PM
 */
    require ('config/config.php');
    require ('config/db.php');

    //Create Query
    $query = 'SELECT * FROM phpwebsite.posts ORDER BY created_at DESC';

    //Get Result
    $result = mysqli_query($connect, $query);

    //Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($connect);

?>

<?php include('inc/header.php'); ?>

    <!-- This is the body of the blog page-->
    <div class="container">
        <h1>This is the Blog Page</h1>
        <div class="well">
            <?php foreach($posts as $post) : ?>
                <h3><?php echo $post['title']; ?> </h3>
                <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                <p class="text-default"><?php echo $post['body']; ?></p>
                <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Read More...</a>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>

<?php include('inc/footer.php'); ?>
