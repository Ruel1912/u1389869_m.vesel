<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image" href="img/icon.png">
    <style>
        
    </style>
</head>
<body>
<header>
    <div class="headerMainInfo">
        <div class="headerLogo">
            <img class="logo" src="img/logo.png" alt="Логотип">
        </div>
        <div class="headerSiteName">Мой сайт</div>
        <div class="headerDataContacts">
            <div class="phoneContacts">+7(800)-555-35-35</div>
            <div class="emailContacts">test@yandex.ru</div>
        </div>
    </div>
    <div class="headerMenu">
        <a target="_blank" href="start/start.php">Знакомство с Версткой</a>
        <a target="_blank" href="header/header.php">Шапка сайта</a>
        <a target="_blank" href="pyramid/pyramid.php">Пирамидная расстановка</a>
        <a target="_blank" href="graphics/">Графика</a>
        <a target="_blank" href="flex/flex.php">Flex'ы</a>
        <a target="_blank" href="magic/magic.php">Magic</a>
        <a target="_blank" href="table/table.php">Grid'ы</a>
        <a target="_blank" href="scroll/scroll.php">Фоны и скролл</a>
        <a target="_blank" href="events/">События</a>

    </div>
</header>

<main>
    <div class="cat">
        <pre>
 /\_/\
( o.o )
 = o =
        </pre> 
    </div>
    <div class="procrastinate">
        <div class="header">
            <p class="logo">Procrastinate.</p>
            <div class="button">Ещё идея</div>
        </div>
        <img class="image" src="https://code.s3.yandex.net/web-code/procrastinate/9.png">
        <div class="advice">
            <span>Не писать код, а</span>
            <span class="phrase">что бы поделать?</span>
            <img class="cursor" src="https://code.s3.yandex.net/web-code/cursor.gif">
        </div>
        <p align="right" class="footer">© 2022</p>
    </div>
    
</main>
<footer>
    <div><a>Политика конфеденциальности</a></div>
    <div><a>Карта сайта</a></div>
    <div><a>Служба поддержки</a></div>
</footer>
<script src="https://code.s3.yandex.net/web-code/smoothly.js"></script>
<script>
    let phrases = [
        { text: 'отправить другу смешную гифку', image: 'https://code.s3.yandex.net/web-code/procrastinate/1.gif' },
        { text: 'посмотреть скидки на авиабилеты', image: 'https://code.s3.yandex.net/web-code/procrastinate/2.png' },
        { text: 'разобраться, о чём поют рэперы', image: 'https://code.s3.yandex.net/web-code/procrastinate/3.png' },
        { text: 'Юрий Дудь', image: 'https://code.s3.yandex.net/web-code/procrastinate/4.png' },
        { text: 'расставить книги на полке по цвету', image: 'https://code.s3.yandex.net/web-code/procrastinate/5.png' },
        { text: 'читать про зарплаты в Сан-Франциско', image: 'https://code.s3.yandex.net/web-code/procrastinate/6.png' },
        { text: 'прочитать новости и ужаснуться в комментариях', image: 'https://code.s3.yandex.net/web-code/procrastinate/7.png' },
        { text: 'попасть в поток грустных песен и вспомнить все ошибки молодости', image: 'https://code.s3.yandex.net/web-code/procrastinate/8.png' },
        { text: 'посмотреть трейлер сериала и заодно первый сезон', image: 'https://code.s3.yandex.net/web-code/procrastinate/9.png' },
        { text: 'проверить непрочитанное в Telegram-каналах', image: 'https://code.s3.yandex.net/web-code/procrastinate/10.png' }
    ];

    function getRandomElement(arr) {
        let randIndex = Math.floor(Math.random() * arr.length);
        return arr[randIndex];
    }

    let button = document.querySelector('.button');
    let phrase = document.querySelector('.phrase');
    let advice = document.querySelector('.advice');
    let image = document.querySelector('.image');

    button.addEventListener('click', function () {
        let randomElement = getRandomElement(phrases);
        smoothly(phrase, 'textContent', randomElement.text);
        smoothly(image, 'src', randomElement.image);

        if (randomElement.text.length > 40) {
            advice.style.fontSize = '33px';
        } else {
            advice.style.fontSize = '42px';
        }
    });
</script>
</body>
</html> 