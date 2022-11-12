<?php

    require '../utils/db_connect.php';

    $username = $_POST['username-form'];
    $pass = $_POST['password-form'];
    $email = $_POST['email-form'];
    $institute = $_POST['institute-form'];

    // Sprawdzanie czy pola w formularzu zostaly poprawnie wpisane

    if(!isset($username) ||!isset($pass) || !isset($email) || !isset($institute)) {
        $_SESSION['register-error'] = '<span style="color: red;">Musisz wpisać dane do pól.</span>';
        header('Location: register.php');
    } else {
        if($username == '' or $pass == '' or $email == '' or $institute == '') {
            $_SESSION['register-error'] = '<span style="color: red;">Dane w polach nie mogą być puste.</span>';
            header('Location: register.php');
        }
    }

    // Sprawdzanie czy uzytkownik jest w bazie

    $query = "SELECT login FROM `users` WHERE login = '$username'";
    $result = mysqli_query($conn, $query) or die();

    // Sprawdzanie czy istnieje juz uzytkownik o podanym loginie

    while($row = mysqli_fetch_assoc($result)) {
        if($row['login'] == $username) {
            $_SESSION['register-error'] = '<span style="color: red;">Użytkownik o podanej nazwie już istnieje!</span>';
            header('Location: register.php');
        }
    }

    // Dodawanie usera do bazy danych

    $query = mysqli_prepare($conn, "INSERT INTO users (login, email, password, institution) VALUES (?, ?, ?, ?)");

    mysqli_stmt_bind_param($query, 'ssss', $username, $email, hash('sha256', $pass), $institute);
    mysqli_stmt_execute($query) or die();

    // Przekierowanie do login.php z informacja

    $_SESSION['login-error'] = '<span style="color: green;">Konto zostało pomyślnie stworzone.</span>';
    header('Location: login.php');

?>
