<?php
include "databases.php";

$result1=mysqli_query($induction, "SELECT * FROM `Car(crosover)`");
$result2=mysqli_query($induction, "SELECT * FROM `Car(sedan)`");

$basket=mysqli_query($induction, "SELECT * FROM `Basket`");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="shortcut icon" href="https://laba/img/1.png" />
    <link rel="stylesheet" href="https://laba/css/style2.css">
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
            <a class="menu" href="3.php" style="margin-left: 150px; margin-right: 150px;">Скидки</a>
            <a class="menu" href="4.php" style="margin-right: 150px;">Наши сотрудники</a>
            <a class="menu" href="5.php" >Контакты</a>
        </div>
    </div>


    <div style="background-color:#000000;">
        <br/>   
        <div class="section search" style="margin-left:50px; margin-top:-20px;">
            <h3 style="color:#fff; font-size:40px; margin-left:450px;">Поиск по каталогу</h3>
            <form action="search.php" method="post">
                <input type="text" name="search" class="search" placeholder="поиск..." style="width:900px; margin-left:170px; height:30px;">
                <input type="submit" name="submit" value="поиск">
            </form>
            
        </div>

        <br/>

        <div>
            <?php
                $rofl=mysqli_fetch_assoc($basket);
                if ($rofl['id']) {
                    echo
                    "<a href=\"basketplace.php\" target=\"_self\">
                    <img class=\"cartina\" src=\"https://laba/img/basket2.png\" style=\"width:60px; margin-left:1200px; margin-top:20px;\" /></a>";
                }
                else {
                    echo 
                    "<a href=\"basketplace.php\" target=\"_self\">
                    <img class=\"cartina\" src=\"https://laba/img/basket1.png\" style=\"width:60px; margin-left:1200px; margin-top:20px;\" /></a>";
                }
            
            ?>
        </div>



        <br/>
        <h2 style="color:#fff; font-size: 35px; margin-left: 580px;">Кроссоверы</h2>


        <?php
            while($mashine1 = mysqli_fetch_assoc($result1))
            {?>
            
                <div class="car1">
                    <a class="plus" href="<?php echo $mashine1['short_description'] ?>" >+</a>
                    <img class="arkana" style="width:35vw; height:220px;" src="<?php echo $mashine1['image'] ?>">
                    <div>
                        <p class="text2"><?php echo $mashine1['description'] ?></p>
                        <div style="display:flex;">
                            <p class="text2">Цена: <?php echo $mashine1['price'] ?> руб.</p>
                            <form name="f2" action="basket.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $mashine1['name']?>"/>
                            <input type="hidden" name="image" value="<?php echo $mashine1['image']?>"/>
                            <input type="hidden" name="price" value="<?php echo $mashine1['price']?>"/>
                            <input type="hidden" name="description" value="<?php echo $mashine1['description']?>"/>

                            <button style="width:90px; height:30px; color:fff; background-color:#fffb00; margin-top:16px;">в корзину</button>
                            </form>
                        </div>
                    </div>
                    
            </div>
            
                <hr class="liner"/>
        <?php
            }
        ?>


        <h2 style="color:#fff; font-size: 35px; margin-left: 590px; margin-bottom:40px;">Седаны</h2>

        <?php
            while($mashine2 = mysqli_fetch_assoc($result2))
            {?>
                <div class="car2">
                    <a class="plus" href="<?php echo $mashine2['short_description'] ?>" >+</a>
                    <img class="arkana" src="<?php echo $mashine2['image'] ?>" style="width:35vw; height:220px;">
                    <div>
                        <p class="text2"><?php echo $mashine2['description'] ?></p>
                        <div style="display:flex;">
                            <p class="text2">Цена: <?php echo $mashine2['price'] ?> руб.</p>
                            <form name="f2" action="basket.php" method="post">
                        <input type="hidden" name="name" value="<?php echo $mashine2['name']?>"/>
                        <input type="hidden" name="image" value="<?php echo $mashine2['image']?>"/>
                        <input type="hidden" name="price" value="<?php echo $mashine2['price']?>"/>
                        <input type="hidden" name="description" value="<?php echo $mashine2['description']?>"/>

                        <button style="width:90px; height:30px; color:fff; background-color:#fffb00; margin-top:16px;">в корзину</button>
                    </form>
                        </div>
                    </div>
                </div>

                
                <hr class="liner"/>
        <?php
            }
        ?>

        <footer>
            
            <div style="display: flex; margin-left:400px; margin-bottom: 30px; ">
                <a class="menunu" href="index.php" >Главная</a>
                <a class="menunu" href="2.php" style="margin-left: 150px; margin-right: 150px;">Каталог</a>
                <a class="menunu" href="4.php" style="margin-right: 150px;">О нас</a>
            </div>
            
            <br/>
            <p class="footer" style="margin-left:585px; color:#fff;"> &copy; Все права защищены!</p>
            <br/>
        </footer>
    </div>
</body>
</html>