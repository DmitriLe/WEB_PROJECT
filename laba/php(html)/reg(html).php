<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renault</title>
    <link rel="shortcut icon" href="https://laba/img/1.png" />
    <link rel="stylesheet" href="https://laba/css/reg.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@300&display=swap" rel="stylesheet">
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

    <div style=" height: 500px; display: flex; background-color: #000;">
        <div>
            <form class="form" method="post" action="reg(php).php">
                <h1 class="form_title">Регистрация</h1>
                <div class="form_group">
                    <input name='name' type='text' class="form_input" placeholder="Имя">
                    <label class="form_label">Имя</label>
                </div>

                <div class="form_group">
                    <input name='email' type='text' class="form_input" placeholder="Email">
                    <label class="form_label">Email</label>
                </div>

                <div class="form_group">
                    <input name='login' type='text' class="form_input" placeholder="Логин">
                    <label class="form_label">Логин</label>
                </div>

                <div class="form_group">
                    <input name='password' type='text' class="form_input" placeholder="Пароль">
                    <label class="form_label" >Пароль</label>
                </div>

                <button class="form_button">Зарегистрироваться</button>
            </form>
        </div>
    </div>


</body>
</html>