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

        <section class="waterfall container container--pl">
            <div class="waterfall__block waterfall__block--no-padding waterfall__block--small waterfall__block--title">
                <h2 class="title title--big title--color-main">
                    Перечень наших<br>
                    услуг
                </h2>
            </div>
            <div class="waterfall__block waterfall__block--grad-normal waterfall__block--small waterfall__block--design">
                <h2 class="title title--small waterfall__block-title">
                    UX/UI дизайн
                </h2>
                <p class="waterfall__block-desc">
                    Создание продающих и удобных в<br>
                    использовании сайтов под конкретные<br>
                    задачи бизнеса. Разработка логотипов,<br>
                    фирменного стиля, выделяющего<br>
                    компанию на фоне конкурентов
                </p>
            </div>
            <div class="waterfall__block waterfall__block--small waterfall__block--test">
                <img src="/assets/front/img/test.png" alt="img" class="waterfall__block-bg"
                     v-parallax="0.8">
                <div class="waterfall__block-content"
                     v-parallax="1">
                    <h2 class="title title--small waterfall__block-title">
                        Тестирование<br>
                        техническая поддержка
                    </h2>
                    <p class="waterfall__block-desc">
                        Выявление проблем функциональности,<br>
                        юзабилити и производительности сайта.<br>
                        Постоянный контроль, администрирование<br>
                        и техническая поддержка сайта
                    </p>
                </div>
            </div>
            <div class="waterfall__block waterfall__block--analiz">
                <img src="/assets/front/img/analiz.png" alt="img" class="waterfall__block-bg"
                     v-parallax="0.8">
                <div class="waterfall__block-content"
                     v-parallax="1">
                    <h2 class="title title--small waterfall__block-title">
                        Проектирование
                    </h2>
                    <p class="waterfall__block-desc">
                        Составление четкой структуры<br>
                        и последовательный анализ<br>
                        всех этапов разработки проекта
                    </p>
                </div>
            </div>
            <div class="waterfall__block waterfall__block--dev">
                <img src="/assets/front/img/dev.png" alt="img" class="waterfall__block-bg"
                     v-parallax="0.8">
                <div class="waterfall__block-content"
                     v-parallax="1">
                    <h2 class="title title--small waterfall__block-title">
                        Frontend- и backend-разработка
                    </h2>
                    <p class="waterfall__block-desc">
                        Верстка шаблона сайта и создание<br>
                        пользовательского интерфейса,<br>
                        Реализация серверной части сайта,<br>
                        интеграция базы данных и связь ее с<br>
                        front-end частью
                    </p>
                </div>
            </div>
            <div class="waterfall__block waterfall__block--grad-rotate waterfall__block--content">
                <h2 class="title title--small waterfall__block-title">
                    Копирайтинг
                </h2>
                <p class="waterfall__block-desc">
                    Написание качественного и<br>
                    уникального текстового контента
                </p>
            </div>
        </section>

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
