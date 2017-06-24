<?php
/**
 * Created by PhpStorm.
 * User: ITSUPPORT-05
 * Date: 6/17/2017
 * Time: 12:29 PM
 */
?>

<!--This is the navigation Section-->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php ROOT_URL; ?>index.php"><?php SITE_NAME; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php ROOT_URL; ?>index.php">Home</a></li>
                <li><a href="<?php ROOT_URL; ?>blog.php">Blog</a></li>
                <li><a href="<?php ROOT_URL; ?>addpost.php">Add Post</a></li>
                <li><a href="<?php ROOT_URL; ?>contact.php">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

