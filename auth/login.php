<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planetarium - Logowanie</title>

    <link rel="stylesheet" href="../css/style.css" class="stylesheet">

    <!-- Importowanie Font Awesome i Google Fonts -->
    <?php require '../utils/fonts.php' ?>

</head>

<script>

    function validate_form() {
        let username = document.forms['login-form']['username-form'].value
        let password = document.forms['login-form']['password-form'].value

        if(username == '' || password == '') {
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

            <form onsubmit="return validate_form()" action="/planetarium/auth/login_script.php" method="POST" name="login-form">

                <input class="login-form" type="text" name="username-form" placeholder="Nazwa użytkownika" required>

                <input class="login-form" type="password" name="password-form" placeholder="Hasło" required>
                <br />

                <input type="submit" class="nav-button" value="Zaloguj się">

                <?php
                    if(!isset($_SESSION)) {
                        session_start();
                    }

                    if(isset($_SESSION['login-error'])) {
                        echo '<br />' . $_SESSION['login-error'];
                        unset($_SESSION['login-error']);
                    }
                ?>

                <p>Nie masz konta? <a class="link" href="register.php">Zarejestruj się</a></p>

            </form>

        </div>

    </div>

    <!-- Importowanie Footera -->
    <?php require '../templates/footer.php' ?>

</body>
</html>
