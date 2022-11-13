<?php

    require '../utils/db_connect.php';

    $username = $_POST['username-form'];
    $pass = $_POST['password-form'];

    // Sprawdzanie czy pola w formularzu zostaly poprawnie wpisane

    if(!isset($username) ||!isset($pass)) {
        $_SESSION['register-error'] = '<span style="color: red;">Musisz wpisać dane do pól.</span>';
        header('Location: login.php');
        exit();
    } else {
        if($username == '' or $pass == '') {
            $_SESSION['register-error'] = '<span style="color: red;">Dane w polach nie mogą być puste.</span>';
            header('Location: register.php');
            exit();
        }
    }

        // Sprawdzanie czy istnieje juz uzytkownik o podanym loginie

    $query = "SELECT login FROM `users` WHERE login = '$username'";
    $result = mysqli_query($conn, $query) or die();

    if(mysqli_fetch_assoc($result)) {

        // Sprawdzanie czy dane logowania sa poprawne

        $pass = hash('sha256', $pass);

        $query = "SELECT * FROM `users` WHERE login = '$username' AND password ='$pass'";
        $result = mysqli_query($conn, $query) or die();

        if(mysqli_num_rows(@$result) != 1) {

            // Przekierowanie z informacja, ze haslo jest niepoprawne

            $_SESSION['login-error'] = '<span style="color: red;">Podane hasło nie jest poprawne.</span>';
            header('Location: login.php');
            exit();
        } else {

            // Zapisanie danych do zmiennych sesji

            $row = mysqli_fetch_assoc($result);

            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $username;

            header('Location: ../index.php');
            exit();
        }

    } else {
        $_SESSION['login-error'] = '<span style="color: red;">Użytkownik o podanym loginie nie istnieje.</span>';
        header('Location: login.php');
        exit();
    }

?>
