<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/front/css/style.css">
</head>
<body>

<div id="app" class="page__wrapper">

    <div class="page__inner">
        <penza-header></penza-header>

        <section class="project container">
            <h2 class="title title--big title--color-main">Описание проекта</h2>
            <div class="project__info">
                <div class="project__info-img">
                    <img src="/assets/front/img/pona.png">
                </div>
                <div class="project__info-content">
                    <h3 class="title title--small project__info-title">ПотерялНашел</h3>
                    <p class="project__info-desc">
                        полезный сервис, который помогает быть всегда на связи горожанам, потерявшим кого-то или что-то или нашедшим
                    </p>
                    <a href="https://pona1.ru/penza" class="link project__info-link">https://pona1.ru/penza</a>
                    <div class="project__info-time">Продолжительность разработки:  в процессе</div>
                    <div class="project__info-price">Стоимость разработки:  —</div>
                </div>
            </div>
            <div class="project__content">
                <p>
                    Сервис <b>ПотерялНашел</b> охватывает сразу несколько социальных сетей и обладает мощным сообществом активных пользователей. По сравнению с аналогами проект является уникальным в сфере поисковых платформ. Платформа позволяет общаться без посредников, что уменьшает временные затраты на возвращение пропажи к владельцу.
                </p>
                <p>
                    Главным эффектом от проекта станет увеличение числа граждан нашей страны вернувших свою пропажу
                    и получивших поддержку в поисках своих вещей или домашних животных.
                </p>
                <p>
                    Любой желающий, обладающий минимальной компьютерной грамотностью, способен разместить объявление за пару минут. А затем его пост автоматически распространится по социальным сетям.
                    Как результат — максимальное количество пользователей интернета смогут увидеть информацию
                    о вашей находке или пропаже.
                </p>
                <p>
                    Целью проекта является развитие общедоступного, удобного сервиса поиска пропавших вещей в сети Интернет -
                    <a href="https://пона1.рф">https://пона1.рф</a>, который будет способствовать увеличению объема находок, а также появлению еще одного устойчивого канала связи людей друг с другом.
                </p>
            </div>
        </section>

        <penza-interface-slider></penza-interface-slider>

        <footer class="footer">
            <div class="container container--content">
                <div class="footer__content">
                    <a href="/" class="footer__logo">
                        <img class="footer__logo-img" src="/assets/front/img/logo-white.svg" alt="rosoperator-logo">
                    </a>
                    <ul class="footer__list">
                        <li class="footer__list-item">
                            <h3 class="footer__list-title">Контакты</h3>
                        </li>
                        <li class="footer__list-item">
                            <b>Адрес:</b> Россия, г. Пенза, Гагарина, 16
                        </li>
                        <li class="footer__list-item">
                            <b>E-mail:</b>
                            <a href="mailto:inbox@rosoperator.com" class="footer__list-link">inbox@rosoperator.com</a>
                        </li>
                        <li class="footer__list-item">
                            <b>Телефон:</b>
                            <a href="tel:+78412232313" class="footer__list-link">+7 (841) 223-23-13</a>
                        </li>
                        <li class="footer__list-item">
                            <a href="#" class="footer__list-link">Список участников кластера</a>
                        </li>
                    </ul>
                    <ul class="footer__list">
                        <li class="footer__list-item">
                            <h3 class="footer__list-title">Услуги</h3>
                        </li>
                        <li class="footer__list-item">
                            Frontend-разработка
                        </li>
                        <li class="footer__list-item">
                            Backend-разработка
                        </li>
                        <li class="footer__list-item">
                            UX/UI дизайн
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>

</div>

<script src="./assets/front/js/app.js"></script>

</body>
</html>
