<?php
include "databases.php";

$result=mysqli_query($induction, "SELECT * FROM `slider`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renault</title>
    <link rel="shortcut icon" href="https://laba/img/1.png" />
    <link rel="stylesheet" href="https://laba/css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div style="height: 130px; background-color:#000; margin: 0 auto; display: flex;">
            <img src="https://laba/img/1.png" style="height:100px; margin-top: 15px;">
            <h1 style="font-size:50px ; font-family: Geneva, Arial, Helvetica; margin-left: 430px;" class="shap">Renault</h1>
            <div class="box" style="margin-left: auto; margin-right: 20px; margin-top: -10px;">
                <div style="display: flex; align-items: center;">
                    <h4 style="font-size: 18px;">логин</h4>
                    <input class="vvod" type="input" style="margin-left:40px; width: 150px; height:20px;"/>
                </div>
                <div style="display: flex; align-items: center; margin-top: -30px;">
                    <h4 style="font-size: 18px;">пароль</h4>
                    <input class="vvod" type="input" style="margin-left:31px; width: 150px; height:20px;"/>
                </div>
                <div style="display: flex; margin-top: -10px; margin-left:8px;">
                    <button class="button" style="width:135px; height:25px; font-size: 15px;margin-right:20px;"><a href="reg(html).php" style="color:#000;">Регистрация</a></button>
                    <button class="button" style="width:75px; height:25px; font-size: 15px;">Войти</button>
                </div>
            </div>
        </div>
    </header>

    <div style="height: 55px; background-color:#fff; margin: 0 auto; display: flex;">
        <div style="margin: 5px auto; font-size: 20px;">
            <a class="menu" href="2.php" >Каталог</a>
            <a class="menu" href="3.php" style="margin-left: 150px; margin-right: 150px;">Скидки</a>
            <a class="menu" href="4.php" style="margin-right: 150px;">Наши сотрудники</a>
            <a class="menu" href="5.php" >Контакты</a>
        </div>
    </div>

    <div style="height: 1210px;  display: flex; background-color: #757575;">
        <div style="width: 200px; height: 1210px; background-color: #000000; ">
            <div style="margin-top:20px; margin-left:50px;">
                <a class="leftmenu" href="model1.php">Arkana</a>
                <a class="leftmenu" href="model2.php">Sandero</a>
                <a class="leftmenu" href="model3.php">Logan</a>
                <a class="leftmenu" href="model6.php">Kaptur</a>
            </div>   
            <hr style="margin-top: 789px;"/>
        </div>
        <div style="height: 1210px;  margin-left: auto; background-color: #000000;">
            <h2 style="color:rgb(255, 255, 255);">Модельный ряд Renault</h2>
            <div style="display:flex; align-items:center;">
                <div class="txt" style="margin-top: -50px;">
                    <p align="justify">
                        Покупайте новый автомобиль Renault по цене от производителя с минимальным или полным набором опций благодаря наличию различных комплектаций.
                        <br/><i>Любой из автомобилей Renault станет надёжным другом на дороге, проявив самые лучшие качества, предусмотренные французскими инженерами.</i>
                    </p>
                    <h3>
                        Кроме покупки нового автомобиля вы можете приобрести авто с пробегом.
                    </h3>
                </div>  
                
                <div class="container" style="margin-left:20px; margin-right:20px;">
                    <div class="slider" style="height:170px; width:302px; border: 2px solid white; overflow:hidden; ">
                        <div class="slider-line" style="height:170px; display:flex; position:relative; left:0; transition: all ease 0.7s;">
                            <?php
                            while($mashine = mysqli_fetch_assoc($result))
                            {?>
                                <img src="<?php echo $mashine['image'] ?>" style="height:170px; padding:0px; ">
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="knopki" style="margin:10px 0px 0px 62px;">
                    <button class="slider-prev" style="border:none;padding: 5px 5px; border-radius:5px; color:#000; background-color:#fffb00; outline:none; cursor:pointer; transition: 0.3s;">Предыдущий</button>
                    <button class="slider-next"  style="border:none;padding: 5px 5px; border-radius:5px; color:#000; background-color:#fffb00; outline:none; cursor:pointer; transition: 0.3s;">Следующий</button>
                    </div>
                </div>

                
            </div>
            <table class="table"  style="margin-top: -20px;">
                <tr>
                    <td rowspan="2" style="border: 2px solid rgba(255, 255, 255, 0.733); width:150px; height:50px; text-align: center; box-shadow: 0px 0px 1px 0px;">Модель</td>
                    <td style="border: 2px solid rgba(255, 255, 255, 0.733); width:150px; height:50px; text-align: center; box-shadow: 0px 0px 0px 0px;">Arkana</td>
                    <td style="border: 2px solid rgba(255, 255, 255, 0.733); width:150px; height:50px; text-align: center; box-shadow: 0px 0px 0px 0px;">Kaptur</td>
                </tr>
                <tr>
                    
                    <td style="border: 2px solid rgba(255, 255, 255, 0.733); text-align: center; box-shadow: 0px 0px 1px 0px;">Duster</td>
                    <td style="border: 2px solid rgba(255, 255, 255, 0.733); width:150px; height:50px; text-align: center; box-shadow: 0px 0px 1px 0px;">Sandero</td>
                </tr>
                <tr>
                    <td style="border: 2px solid rgba(255, 255, 255, 0.733); text-align: center; box-shadow: 0px 0px 1px 0px;">Renault</td>
                    <td style="border: 2px solid rgba(255, 255, 255, 0.733); text-align: center; box-shadow: 0px 0px 1px 0px;">Logan</td>
                    <td style="border: 2px solid rgba(255, 255, 255, 0.733); width:150px; height:50px; text-align: center; box-shadow: 0px 0px 1px 0px;">Fluence</td>
                </tr>
            </table>
            <div class="txtxt">
                <h3>Легковые автомобили</h3>
                <ul>
                    <li>Renault Arkana</li>
                    <li>Renault Fluence</li>
                    <li>Renault Duster</li>
                </ul>
                <h3>Коммерческий транспорт</h3>
                <ol>
                    <li>Renault Logan</li>
                    <li>Renault Sandero</li>
                    <li>Renault Master</li>
                </ol>
                <h3>Запчасти в наличии</h3>
                <ol>
                    <li>Renault Arkana
                        <ol>
                            <li>Рулевая рейка</li>
                            <li>Ступица</li>
                            <li>Подшипник</li>
                        </ol>
                    </li>
                    <li>Renault Sandero
                        <ol>
                            <li>Поворотный кулак</li>
                            <li>Гидрокомпенсаторы</li>
                            <li>Форсунки</li>
                        </ol>
                    </li>
                    <li>Renault Logan
                        <ol>
                            <li>Свечи зажигания</li>
                            <li>Генератор</li>
                            <li>Радиатор охлаждения</li>
                        </ol>
                    </li>
                </ol>
            </div>
            <footer>
                <hr/>
                <div style="display: flex; margin-left:213px; margin-bottom: -7px;">
                    <a class="menunu" href="index.php" >Главная</a>
                    <a class="menunu" href="2.php" style="margin-left: 150px; margin-right: 150px;">Каталог</a>
                    <a class="menunu" href="4.php" style="margin-right: 150px;">О нас</a>
                </div>
                <div style="margin-left:92px;">


                    <form method="post" action="mes.php">
                        <div style="display:flex;">
                            <p style="color:#fff; font-size: 30px; margin-left:105px; margin-right:20px;">Вы можете написать нам:</p>
                            <input type="text" style="height: 30px; width:200px; margin-top:30px;" name="name" placeholder="Имя пользователя">
                            <!--<a class="menunu" href="mailto:leontev_dmitri@mail.ru" style="margin-left: 370px;">leontev_dmitri@mail.ru</a>-->
                        </div>
                        <div style="dispaly:flex; margin-left:366px; margin-top:-15px;">
                            <button type="submit" name="submit" class="button1" style="text-decoration: none; color:#000;">Отправить</button>
                            <input type="text" style="height:60px; width:200px;" name="mes" placeholder="Сообщение">
                        </div>
                    </form>


                </div>
                
                <br/>
                <p style="margin-left:400px; color:#fff;"> &copy; Все права защищены!</p>
            </footer>
        </div>
    </div>

    <script src="slider.js"></script>

</body>
</html>