<?php
    require('mysqli_config.php');
    require('db.php');

    $query = 'SELECT * FROM posts';
    $result = mysqli_query($conn, $query); // $conn comes from db.php
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);
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
        <h1>Posts</h1>

        <div class="container">
            <?php foreach($posts as $post): ?>
                <div class="well">
                    <h3><?php echo $post['title']; ?></h3>
                    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                    <p><?php echo $post['body']; ?></p>
                    <a class="btn btn-default" href="mysqli_post.php?id=<?php echo $post['id']; ?>">Read More</a>
                </div>
            <?php endforeach; ?>
        </div>


    </body>
</html>
