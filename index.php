<?php

    $msg = '';
    $msgClass = '';

    if (filter_has_var(INPUT_POST, 'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check required fields
        if (!empty($name) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'support@traversymedia.com';
                $subject = 'Contact Request From ' . $name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';

                $headers = "MIME-VERSION: 1.0" . "\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                $headers .= "From: " . $name. "<" .$email. ">" . "\r\n";

                if (mail($toEmail, $subject, $body, $headers)) {
                    $msg = 'Your email has been sent';
                    $msgClass = 'success';
                } else {
                    $msg = 'Your email has not been sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">My Website</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control">
                        <?php echo isset($_POST['name']) ? $name : '' ?>
                    </textarea>

                </div>

                <br>

                <button class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>

    </body>
</html>
