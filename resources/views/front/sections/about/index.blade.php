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

        <section class="hero container">
            <div class="hero__container" style="background-image: url('/assets/front/img/hero-bg.png');">
            </div>
        </section>

        <section class="about__short container">
            <h3 class="title title--small about__short-title about__short-title--bigger">
                Росоператор - Межрегиональный научно-производственный<br>
                кластер, в задачи которого входит создание и сопровождение<br>
                информационных систем для автоматизации бизнес-процессов<br>
                органов госвласти и местного самоуправления, различных<br>
                коммерческих и некоммерческих организаций
            </h3>
            <a href="#" class="link">Список участников кластера</a>
        </section>

        <penza-numbers></penza-numbers>

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
