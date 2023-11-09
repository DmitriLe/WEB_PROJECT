<?php 
include "databases.php";

$result=mysqli_query($induction, "SELECT * FROM `Basket`");
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
            <a class="menu" href="2.php" style="margin-left: 150px; margin-right: 150px;">Каталог</a>
            <a class="menu" href="4.php" style="margin-right: 150px;">Наши сотрудники</a>
            <a class="menu" href="5.php" >Контакты</a>
        </div>
    </div>


    <div style="background-color:#000000; overflow:hidden; display:flex; flex-direction:column; min-height:480px;">
        <br/>   
        
        <h2 style="color:#fff; font-size: 35px; margin-left: 615px;">Корзина</h2>
        
        <div>
            <?php
                $usl = mysqli_fetch_assoc($result);
                if (!$usl['id']) {
                    echo 
                    "<h1>Корзина пуста</h1>";
                }
                else {
                    ?>
                    <form method="post" action="deleteall.php">
                        <button style="background-color:#fffb00; color:#000; width:140px; height:35px; margin-left:60px; font-size:15px; font-weight:bold;">Очистить всё!!!</button>
                    </form>
                    <!--<br/>
                    <img src="<?php echo $usl1['image']?>" style="width:300px;">
                    <br/>
                    <a style="color:#fff; font-size:40px;"><?php echo $usl1['name']?></a>
                    <br/>
                    <a style="color:#fff; font-size:40px;"><?php echo $usl1['price']?> руб.</a>-->

                    <div class="car2">
                    <a class="plus" href="<?php echo $usl['short_description'] ?>" >+</a>
                    <img class="arkana" src="<?php echo $usl['image'] ?>" style="width:35vw; height:220px;">
                    <div>
                        <p class="text2"><?php echo $usl['description'] ?></p>
                        <div style="display:flex;">
                            <p class="text2">Цена: <?php $total=$total+$usl['price']; echo $usl['price'] ?> руб.</p>
                            
                        </div>
                    </div>
                    </div>

                    <div>
                        <form method="post" action="deleteit.php">
                            <input type="hidden" name="id" value="<?php echo $usl['id']?>"/>
                            <button style="background-color:#fffb00; color:#000; width:140px; height:35px; margin-left:60px; font-size:15px; font-weight:bold; margin-top:-60px;">Удалить товар</button>
                        </form>
                    </div>
                    <br/>
                   

                    <?php
                        while($usl=mysqli_fetch_assoc($result)) {
                    ?>
                   
                    <div class="car2">
                    <a class="plus" href="<?php echo $usl['short_description'] ?>" >+</a>
                    <img class="arkana" src="<?php echo $usl['image'] ?>" style="width:35vw; height:220px;">
                    <div>
                        <p class="text2"><?php echo $usl['description'] ?></p>
                        <div style="display:flex;">
                            <p class="text2">Цена: <?php $total=$total+$usl['price']; echo $usl['price'] ?> руб.</p>
                            
                        </div>
                    </div>
                    </div>
                    <div>
                        <form method="post" action="deleteit.php">
                            <input type="hidden" name="id" value="<?php echo $usl['id']?>"/>
                            <button style="background-color:#fffb00; color:#000; width:140px; height:35px; margin-left:60px; font-size:15px; font-weight:bold; margin-top:-60px;">Удалить товар</button>
                            
                        </form>
                        
                    </div>
                    <br/>
                    
                    
                    <?php } ?>
                    

                <?php
                }
            ?>
            <p style="color:#fff; margin-left:60px; font-size:30px; font-weight:bold;">Итого: <?php echo $total ?> руб.</p>
        </div>

        <footer style="margin-top:auto;">
            
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