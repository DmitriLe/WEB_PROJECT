<?php
    $inducation = new mysqli("127.0.0.1", "root", "", "Auto");
    if($inducation->connect_error) {
        die("Ошибка " . $inducation->connect_error);
    }
    $id=$inducation->real_escape_string($_POST["id"]);
    $sql="DELETE FROM `Basket` WHERE `Basket`.`id`=$id";

    if($inducation->query($sql)) {
        echo "УСПЕШНО";
        header("Location: https://laba/php(html)/basketplace.php");
        die();
    } else {
        echo "Ошибка " . $inducation->error;
    }

?>