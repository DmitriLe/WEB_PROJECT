<?php
    $inducation = new mysqli("127.0.0.1", "root", "", "Auto");
    if($inducation->connect_error) {
        die("Ошибка " . $inducation->connect_error);
    }
    $image=$inducation->real_escape_string($_POST["image"]);
    $description=$inducation->real_escape_string($_POST["description"]);
    $name=$inducation->real_escape_string($_POST["name"]);
    $price=$inducation->real_escape_string($_POST["price"]);
    $sql="INSERT INTO Basket (name, image, price, description) VALUES ('$name', '$image', '$price', '$description')";
    if($inducation->query($sql)) {
        echo "УСПЕШНО";
        header("Location: https://laba/php(html)/2.php");
        die();
    } else {
        echo "Ошибка " . $inducation->error;
    }

?>