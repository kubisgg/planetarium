<?php

    require 'get_quotes.php';

    $number = rand(0, $_SESSION['quotes-amount']-1);

    $_SESSION['quote-content'] = $_SESSION['quotes'][$number]['content'];
    $_SESSION['quote-author'] = $_SESSION['quotes'][$number]['author'];

?>
