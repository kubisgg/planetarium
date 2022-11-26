<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planetarium - Rejestracja</title>

    <link rel="stylesheet" href="../css/style.css" class="stylesheet">

    <!-- Importowanie Font Awesome i Google Fonts -->
    <?php require '../utils/fonts.php' ?>

</head>

<script>

    function validate_form() {
        let username = document.forms['register-form']['username-form'].value
        let password = document.forms['register-form']['password-form'].value
        let email = document.forms['register-form']['email-form'].value
        let institute = document.forms['register-form']['institute-form'].value

        if(username == '' || password == '' || email == '' || institute == '') {
            alert('Wszystkie pola muszą być wypełnione')
            return false
        }
    }

</script>

<body>

    <!-- Importowanie Headera -->
    <?php require '../templates/header.php' ?>

    <div id="container">

        <div class="login-form">

            <form onsubmit="return validate_form()" action="/planetarium/auth/register_script.php" method="POST" name="register-form">

                <input class="login-form" type="text" name="username-form" placeholder="Nazwa użytkownika" required>

                <input class="login-form" type="password" name="password-form" placeholder="Hasło" required>

                <input class="login-form" type="email" name="email-form" placeholder="E-mail" required>

                <input class="login-form" type="text" name="institute-form" placeholder="Instytut" required>
                <br />

                <input type="submit" class="nav-button" value="Zarejestruj się">

                <?php
                    if(!isset($_SESSION)) {
                        session_start();
                    }

                    if(isset($_SESSION['register-error'])) {
                        echo '<br />' . $_SESSION['register-error'];
                        unset($_SESSION['register-error']);
                    }
                ?>

                <p>Masz już konto? <a class="link" href="login.php">Zaloguj się</a></p>
            </form>

        </div>

    </div>

    <!-- Importowanie Footera -->
    <?php require '../templates//footer.php' ?>

</body>
</html>
