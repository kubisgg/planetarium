<?php

    require './utils/db_connect.php';

    $query = "SELECT * FROM `quotes`";
    $result = mysqli_query($conn, $query) or die();

    $quotes = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $quotes[] = $row;
        }
    }

    $_SESSION['quotes-amount'] = mysqli_num_rows($result);
    $_SESSION['quotes'] = $quotes;

?>
