<?php

    session_start();

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'planetarium';

    $conn = mysqli_connect($server, $user, $pass, $db);

?>
