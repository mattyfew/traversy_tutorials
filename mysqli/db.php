<?php
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

    if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL' . mysqli_connect_errno();
    }
