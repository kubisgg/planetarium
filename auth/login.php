<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Planetarium - Logowanie</title>

    <link rel="stylesheet" href="../css/style.css" class="stylesheet">

    <!-- Font Awesome 6.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono:ital@0;1&display=swap" rel="stylesheet">
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

                <?php session_start();
                    if(isset($_SESSION['login-error'])) {
                        echo '<br />' . $_SESSION['login-error'];
                        unset($_SESSION['login-error']);
                    }
                ?>

                <p>Nie masz konta? <a href="register.php">Zarejestruj się</a></p>

            </form>

        </div>

    </div>

    <!-- Importowanie Footera -->
    <?php require '../templates/footer.php' ?>

</body>
</html>
