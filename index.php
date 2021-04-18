<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="forfirstsuite.css">
    <!--    <link rel="script" href="main.php">-->
    <title>SF Hacker-5</title>
</head>
<nav>
    <p class="navmenu">
        <a href="http://localhost:63342/MyFirstWeb/index.html?_ijt=c9d80tm54gakpc783ea12t59ni"
           title="Обновить страницу">Главная</a>
        <a>Обо мне</a>
        <a>Мои проекты</a>
        <a>Контакты</a>
    </p>
</nav>
<body>
<img class="logo" src="img/logo.png" alt="Подождите, данные загружаются">
<div class="general_container">
    <div class="welcome">
        <h1>Hello world :)<br>Добро пожаловать на мою первую веб-страницу</h1>
        <div class="about_me">
            <p id="1">Разрешите представиться
                <?php echo 'Меня зовут', ' ', '$name', '<br>';
                echo 'Я учусь в группе', ' ', '$group', '<br>';
                echo 'Мне', ' ', '`$age', ' я из', ' ', '$city';
                ?>
            </p>
        </div>
        <div class="knowledge">
            <p>В результате изучения данного модуля я получил знание о<br>
                простых математических операциях. Сейчас я вам их продемонстрирую!</p>
            <p>Сложение<br>Вычитание<br>Умножение<br>Деление<br>Возведение в степень</p>


        </div>
        <div class="function">
            <p>Мои знания на 73 %</p>
        </div>

    </div>

</div>

</body>
<footer>
    <p id="2">Тут будет тестовый текс.<br>
        Стрелок брёл по пустыне, одинокой, строптивой пустыне. Лицо, в глубоких морщинах
        от жалящего ветра и палящего солнца, было сокрыто под маской. Как оазис среди пустыни
        виднелась старая, заброшенная железнодорожная станция, а в дали... Вдали шел тот, кого
        преследовал Стрелок... <br>
        Ознакомительный отрывок на память из серии книг С. Кинга "Темная Башня".<br>
        Все права незащищены)
    </p>
</footer>
</html>