<?php
    // setcookie('username', 'Frank', time() + 86400 * 30);

    // if (count($_COOKIE) > 0) {
    //     echo 'There are ' . count($_COOKIE) . ' cookies saved <br />';
    // } else {
    //     echo 'There are no cookies saved <br />';
    // }
    //
    // if (isset($_COOKIE['username'])) {
    //     echo 'User ' . $_COOKIE['username'] . ' is set <br />';
    // } else {
    //     echo 'User is not set';
    // }




    // Working with serializing cookies

    $user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);

    print_r($user);
 ?>
