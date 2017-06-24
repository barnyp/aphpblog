<?php
/**
 * Created by PhpStorm.
 * User: ITSUPPORT-05
 * Date: 6/17/2017
 * Time: 12:31 PM
 */

    $connect = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);

    if (mysqli_connect_errno()){
        echo 'Error in connecting with database'.mysqli_connect_errno();
    }
