<?php
include "databases.php";

$result1=mysqli_query($induction, "SELECT * FROM `Fluence`");
$result2=mysqli_query($induction, "SELECT * FROM `Fluence`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renault</title>
    <link rel="shortcut icon" href="https://laba/img/1.png" />
    <link rel="stylesheet" href="https://laba/css/model5.css">
</head>
<body>
    <header class="header">
        <div style="height: 130px; background-color:#000; margin: 0 auto; display: flex;">
            <img src="https://laba/img/1.png" style="height:100px; margin-top: 15px;">
            <h1 style="font-size:50px ; font-family: Geneva, Arial, Helvetica; margin-left: 430px;" class="shap">Renault</h1>
        </div>
    </header>

    <div style="height: 55px; background-color:#fff; margin: 0 auto; display: flex;">
        <div style="margin: 5px auto; font-size: 20px;">
            <a class="menu" href="index.php" >Главная</a>
            <a class="menu" href="2.php" style="margin-left: 150px; margin-right: 150px;">Каталог</a>
            <a class="menu" href="3.php" style="margin-right: 150px;">Скидки</a>
            <a class="menu" href="5.php" >Контакты</a>
        </div>
    </div>

    <div style="height: 990px; background-color:#000000;">
        
        <div>
            <br/>
            <h1 class="text2" style="margin-left:540px; font-size: 35px;">Renault Fluence</h1>
            <div>
                <div style="margin-left:20px;">
                    <div style="display:flex; margin-left:65px;">
                    <?php
                            
                            while($mashine1 = mysqli_fetch_assoc($result1))
                            if($mashine1['id'] < 4) {
                        {?>
                            <img class="ana" style="width:35vw; height:220px;" src="<?php echo $mashine1['images'] ?>">
                        <?php
                        }}
                        ?>
                    </div>
                    <div style="margin-top:20px; display:flex; margin-left:65px;">
                    <?php
                            while($mashine2 = mysqli_fetch_assoc($result2))
                            if($mashine2['id']  > 3) {
                        {?>
                            <img class="ana" style="width:35vw; height:220px;" src="<?php echo $mashine2['images'] ?>">
                        <?php
                        }}
                        ?>
                    </div>
                    <h2 class="text2" style="font-size: 35px;">Описание:</h2>
                    <p class="text2" style="margin-top:-20px;">Автомобиль C-класса (по европейской классификации), французской компании Renault. Дебютировал в 2009 году, заменив седан Renault Megane на рынках Восточной Европы. Использует платформу Nissan C вместе с Renault Megane и Renault Scenic. Продажи автомобиля в России начались в апреле 2010 года: сначала с бензиновым мотором объёмом 1,6 литра (105—110 л. с.), а позднее — ещё и с двигателем объёмом 2,0 литра, оснащённым CVT. В настоящее время в гамму двигателей добавился дизель K9K, объёмом 1,5 литра.</p>
                    <p class="text2" style="font-size: 35px;">Цена:</p>
                    <p class="text2" style="font-size: 30px; margin-top:-20px;">1 100 000 руб.</p>
                </div>
            </div>
           
        </div>

        <footer>
            <hr/>
            <div style="display: flex; margin-left:398px; margin-bottom: 30px;">
                <a class="menunu" href="index.php" >Главная</a>
                <a class="menunu" href="2.php" style="margin-left: 150px; margin-right: 150px;">Каталог</a>
                <a class="menunu" href="4.php" style="margin-right: 150px;">О нас</a>
            </div>
            <br/>
            <p class="footer" style="margin-left:585px; color:#fff;"> &copy; Все права защищены!</p>
        </footer>
    </div>
</body>
</html>