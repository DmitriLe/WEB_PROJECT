<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "Auto")
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="shortcut icon" href="https://laba/img/1.png" />
    <link rel="stylesheet" href="https://laba/css/style22.css">
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


    <div style="background-color:#000;overflow:hidden; display:flex; flex-direction:column; min-height:480px;">
        <br/>   
        <h2 style="color:#fff; margin-left:570px; font-size:25px;">Результаты поиска:</h2>

        <?php 
            if(isset($_POST['submit'])) {
                $search=$_POST['search'];
                $query=mysqli_query($connect, "SELECT * FROM `Car(crosover)` WHERE `name` LIKE '%$search%' ");
                while($row = mysqli_fetch_assoc($query)) { ?>
                    <div class="car1">
                    <a class="plus" href="<?php echo $row['short_description'] ?>" >+</a>
                    <img class="arkana" style="width:35vw; height:220px;" src="<?php echo $row['image'] ?>">
                    <div>
                        <p class="text2"><?php echo $row['description'] ?></p>
                        <div style="display:flex;">
                            <p class="text2">Цена: <?php echo $row['price'] ?> руб.</p>
                            <form name="f2" action="basket.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $row['name']?>"/>
                            <input type="hidden" name="image" value="<?php echo $row['image']?>"/>
                            <input type="hidden" name="price" value="<?php echo $row['price']?>"/>
                            <input type="hidden" name="description" value="<?php echo $row['description']?>"/>

                            <button style="width:90px; height:30px; color:fff; background-color:#fffb00; margin-top:16px;">в корзину</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <hr class="liner"/> <?php
                }
            }


            if(isset($_POST['submit'])) {
                $search=$_POST['search'];
                $query=mysqli_query($connect, "SELECT * FROM `Car(sedan)` WHERE `name` LIKE '%$search%' ");
                while($row = mysqli_fetch_assoc($query)) { ?>
                    <div class="car1">
                    <a class="plus" href="<?php echo $row['short_description'] ?>" >+</a>
                    <img class="arkana" style="width:35vw; height:220px;" src="<?php echo $row['image'] ?>">
                    <div>
                        <p class="text2"><?php echo $row['description'] ?></p>
                        <div style="display:flex;">
                            <p class="text2">Цена: <?php echo $row['price'] ?> руб.</p>
                            <form name="f2" action="basket.php" method="post">
                            <input type="hidden" name="name" value="<?php echo $row['name']?>"/>
                            <input type="hidden" name="image" value="<?php echo $row['image']?>"/>
                            <input type="hidden" name="price" value="<?php echo $row['price']?>"/>
                            <input type="hidden" name="description" value="<?php echo $row['description']?>"/>

                            <button style="width:90px; height:30px; color:fff; background-color:#fffb00; margin-top:16px;">в корзину</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr class="liner"/> <?php
                }
            }
        ?>


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