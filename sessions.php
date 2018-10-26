<?php
    if (isset($_POST['submit'])) {
        session_start(); // start the session

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: sessions2.php');
    }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="text" name="name" placeholder="Enter Name">
            <input type="text" name="email" placeholder="Enter Email">
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
