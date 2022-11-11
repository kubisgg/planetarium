<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planetarium - Rejestracja</title>

    <link rel="stylesheet" href="/planetarium/css/style.css" class="stylesheet">

    <!-- Font Awesome 6.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono:ital@0;1&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Importowanie Headera -->
    <?php require 'templates/header.php' ?>

    <div id="container">

    <!-- TODO: alerte z JS gdy nic nie bedzie w srodku inputow -->
    <!-- TODO: skypt rejestracji w register_script.php -->

        <div class="login-form">

            <form action="/planetarium/auth/register_script.php" method="POST">

                <input class="login-form" type="text" name="login-form" placeholder="Nazwa użytkownika" required>

                <input class="login-form" type="password" name="password-form" placeholder="Hasło" required>

                <input class="login-form" type="email" name="email-form" placeholder="E-mail" required>

                <input class="login-form" type="text" name="institute-form" placeholder="Instytut" required>
                <br />

                <input type="submit" class="nav-button" value="Zarejestruj się">

                <p>Masz już konto? <a href="login.php">Zaloguj się</a></p>
            </form>

        </div>

    </div>

    <!-- Importowanie Footera -->
    <?php require 'templates/footer.php' ?>

</body>
</html>