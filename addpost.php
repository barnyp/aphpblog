<?php
/**
 * Created by PhpStorm.
 * User: Paul Barnabas
 * Date: 6/17/2017
 * Time: 12:27 PM
 */
    require('config/config.php');
    require('config/db.php');

    if (isset($_POST['submit'])){
        $title = mysqli_real_escape_string($connect, $_POST['title']);
        $author = mysqli_real_escape_string($connect, $_POST['author']);
        $body = mysqli_real_escape_string($connect, $_POST['body']);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title','$author','$body')";

        if (mysqli_query($connect, $query)){
            header('Location: '.ROOT_URL.'blog.php'.'');
        } else
            echo 'ERROR: '.mysqli_error($connect);
    }

?>

<?php include('inc/header.php'); ?>

    <!-- This is the body of the homepage-->
    <div class="container">
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
            <legend>ADD POST</legend>

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" id="" placeholder="Post Title">
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" name="author" id="" placeholder="Author's Name">
            </div>

            <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" name="body" id="" placeholder="Post Body"></textarea>
            </div>

            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

<?php include('inc/footer.php'); ?>
