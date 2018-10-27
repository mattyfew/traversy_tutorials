<?php

    require('mysqli_config.php');
    require('db.php');

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = 'SELECT * FROM posts WHERE id = '. $id;
    $result = mysqli_query($conn, $query); // $conn comes from db.php
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result($result); // frees result from memory
    mysqli_close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Blog</title>
        <link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <a href="/" class="btn btn-default">Back</a>
            <h1><?php echo $post['title']; ?></h1>
            <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
            <p><?php echo $post['body']; ?></p>
        </div>
    </body>
</html>
