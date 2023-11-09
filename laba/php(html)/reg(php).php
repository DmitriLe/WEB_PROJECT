<?php
    if(isset($_POST["email"]) && isset($_POST["login"])) {
        $conn = new mysqli("127.0.0.1", "root", "", "Auto");
        if($conn->connect_error) {
            die("Ошибка: " . $conn->connect_error);
        }
        $name = $conn->real_escape_string($_POST["name"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $login = $conn->real_escape_string($_POST["login"]);
        $password = $conn->real_escape_string($_POST["password"]);
        $sql = "INSERT INTO Users (name, email, login, password) VALUES ('$name', '$email', '$login', '$password')";
        if($conn->query($sql)) {
            echo "Данные добавлены";
            header("Location: https://laba/php(html)/index.php");
            die();
        }
        else {
            echo "Ошибка: " . $conn->error;
        }
    }
    else {
        echo "Вы ничего не ввели";
    }
?>