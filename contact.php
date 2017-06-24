<?php
/**
 * Created by PhpStorm.
 * User: Paul Barnabas
 * Date: 6/17/2017
 * Time: 1:41 PM
 */
require ('config/config.php');
require ('config/db.php');

?>

<?php include('inc/header.php'); ?>

    <div class="container">

        <form action="<?php echo ROOT_URL ?>contact.php" method="post" role="form" id="myForm">
            <br>
            <legend>Contact Page</legend>

            <div class="form-group">
                <label for="allName">Name</label>
                <input type="text" class="form-control" name="allName" required placeholder="John Doe">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required placeholder="my@email.com">
            </div>

            <div class="form-group">
                <label for="comment">Questions</label>
                <textarea name="comment" form="myForm" class="form-control">What can we help you with?</textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

<?php include('inc/footer.php'); ?>
