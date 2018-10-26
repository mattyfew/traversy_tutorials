<?php
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time() + 3600); // 1 hr

        header('Location: cookies2.php');
    }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>PHP Cookies</title>
     </head>
     <body>
         <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

             <input type="text" name="username" placeholder="Enter Username">
             <br>
             <input type="submit" name="submit" value="Submit">
         </form>
     </body>
 </html>
