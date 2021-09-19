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

        <section class="projects container">
            <h2 class="title title--big title--color-main">Проекты</h2>
            <div class="projects__grid">
                <div class="projects__item">
                    <div class="projects__item-img">
                        <img src="/assets/front/img/pona.png">
                    </div>
                    <div class="projects__item-content">
                        <h3 class="titile title--small projects__item-title">ПотерялНашел</h3>
                        <p class="projects__item-desc">
                            Полезный сервис, который помогает быть
                            всегда на связи горожанам, потерявшим
                            кого-то или что-то или нашедшим
                        </p>
                        <a href="https://pona1.ru/penza" class="link">https://pona1.ru/penza</a>
                    </div>
                </div>
                <div class="projects__item">
                    <div class="projects__item-img">
                        <img src="/assets/front/img/pnzonline.png">
                    </div>
                    <div class="projects__item-content">
                        <h3 class="titile title--small projects__item-title">Пенза-Онлайн</h3>
                        <p class="projects__item-desc">
                            Информационно-аналитический портал, это не только новости Пензы и Пензенской области сегодня, но и объявления о вакансиях в Пензе, ...
                        </p>
                        <a href="https://penza-online.ru/" class="link">https://penza-online.ru/</a>
                    </div>
                </div>
                <div class="projects__item">
                    <div class="projects__item-img">
                        <img src="/assets/front/img/pnzdoc.png">
                    </div>
                    <div class="projects__item-content">
                        <h3 class="titile title--small projects__item-title">Городской доктор</h3>
                        <p class="projects__item-desc">
                            Простая и дружелюбная платформа для проведения медицинских онлайн-консультаций и онлайн-
                            записи к врачам
                        </p>
                        <a href="https://tele-med.io/" class="link">https://tele-med.io/</a>
                    </div>
                </div>
                <div class="projects__item">
                    <div class="projects__item-img">
                        <img src="/assets/front/img/gosus.png">
                    </div>
                    <div class="projects__item-content">
                        <h3 class="titile title--small projects__item-title">Госуслуги</h3>
                        <p class="projects__item-desc">
                            справочно-информационный интернет-портал (сайт). Обеспечивает доступ физических
                            и юридических лиц к сведениям...
                        </p>
                        <a href="https://gosuslugi.pnzreg.ru/" class="link">https://gosuslugi.pnzreg.ru/</a>
                    </div>
                </div>
                <div class="projects__item">
                    <div class="projects__item-img">
                        <img src="/assets/front/img/mypets.png">
                    </div>
                    <div class="projects__item-content">
                        <h3 class="titile title--small projects__item-title">MyPets</h3>
                        <p class="projects__item-desc">
                            многофункциональная платформа, предоставляющая онлайн-услуги для владельцев животных и ветеринаров
                        </p>
                        <a href="https://mypets.io/" class="link">https://mypets.io/</a>
                    </div>
                </div>
                <div class="projects__item">
                    <div class="projects__item-img">
                        <img src="/assets/front/img/parking.png">
                    </div>
                    <div class="projects__item-content">
                        <h3 class="titile title--small projects__item-title">Умные парковки</h3>
                        <p class="projects__item-desc">
                            Аппаратно-программный комплекс для мониторинга и управления платными парковками, а также мобильное приложение и...
                        </p>
                        <a href="https://rosparkovka.ru/" class="link">https://rosparkovka.ru/</a>
                    </div>
                </div>
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
