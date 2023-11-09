<?php
    if(isset($_POST["name"]) && isset($_POST["mes"])) {
        $conn = new mysqli("127.0.0.1", "root", "", "Auto");
        if($conn->connect_error) {
            die("Ошибка: " . $conn->connect_error);
        }
        $name = $conn->real_escape_string($_POST["name"]);
        $mes = $conn->real_escape_string($_POST["mes"]);
        $sql = "INSERT INTO Comments (name, mes) VALUES ('$name', '$mes')";
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