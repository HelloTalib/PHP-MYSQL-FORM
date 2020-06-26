<?php
require_once 'database.php';
$name  = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
mysqli_query( $connect, "INSERT INTO user(name, email, phone) VALUES('$name', '$email', '$phone')" );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processing</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        if ( mysqli_affected_rows( $connect ) ):
    ?>
    <div class="processing">
        <div class="content">
            <h1> you successfully added user </br>
                <strong><?php echo strtoupper($name); ?></strong></br> to the database!</h1>
            <div class="btn">
                <a  href="index.php">Add Another User</a>
            <a  href="user.php">See All Users</a>
            </div>
        </div>
    </div>
    <?php
       endif;
   ?>
</body>

</html>