<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    $logged_in = false;


    if(isset($_SESSION['id']) and isset($_SESSION['username'])) {
        $logged_in = true;
    }

?>

<link rel="stylesheet" href="/planetarium/css/header.css" class="stylesheet">
<header>

    <h1 class="title">Planetarium</h1>

    <nav>

        <div class="nav-buttons">

            <?php
            if($logged_in) {

                echo '<a href="/planetarium/index.php"><button class="nav-button"><i class="fa-solid fa-house"></i> Strona główna</button></a>';

                echo '<a href="/planetarium/auth/logout.php"><button class="nav-button"><i class="fa-solid fa-right-from-bracket"></i> Wyloguj</button></a>';

            } else {

                echo '<a href="/planetarium/auth/login.php"><button class="nav-button"><i class="fa-solid fa-right-to-bracket"></i> Zaloguj</button></a>';

                echo '<a href="/planetarium/auth/register.php"><button class="nav-button"><i class="fa-solid fa-clipboard-check"></i> Zarejestruj</button></a>';
            }

            ?>

        </div>

    </nav>

</header>
