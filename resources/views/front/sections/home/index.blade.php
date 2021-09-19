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
                    <img class="hero__logo" src="/assets/front/img/logo.svg" alt="rosoperator-logo">
                </div>
            </section>

            <section class="about__short container">
                <h3 class="title title--small about__short-title">
                    Межрегиональный научно-производственный кластер,<br>
                    в задачи которого входит создание информационных систем<br>
                    для автоматизации бизнес-процессов органов госвласти<br>
                    и местного самоуправления, различных коммерческих<br>
                    и некоммерческих организаций<br>
                </h3>
                <a href="#" class="link">Читать подробнее</a>
            </section>

            <section class="waterfall container container--pl">
                <div class="waterfall__block waterfall__block--no-padding waterfall__block--small waterfall__block--title">
                    <h2 class="title title--big title--color-main">
                        Что мы можем вам<br>
                        предложить?
                    </h2>
                </div>
                <div class="waterfall__block waterfall__block--grad-normal waterfall__block--small waterfall__block--design">
                    <h2 class="title title--small waterfall__block-title">
                        Комплексный web-дизайн
                    </h2>
                    <p class="waterfall__block-desc">
                        Мы создаем яркие и эффективные<br>
                        решения, которые отражают современные<br>
                        тенденции и являются интуитивно<br>
                        понятными для пользователя
                    </p>
                </div>
                <div class="waterfall__block waterfall__block--small waterfall__block--test">
                    <img src="/assets/front/img/test.png" alt="img" class="waterfall__block-bg"
                         v-parallax="0.8">
                    <div class="waterfall__block-content"
                         v-parallax="1">
                        <h2 class="title title--small waterfall__block-title">
                            Тестирование
                        </h2>
                        <p class="waterfall__block-desc">
                            Мы работаем по принципу TETO<br>
                            “test early, test often”.<br>
                            Фунциональное тестирование,<br>
                            юзабилити тестирование,<br>
                            нагрузочное тестирование
                        </p>
                    </div>
                </div>
                <div class="waterfall__block waterfall__block--analiz">
                    <img src="/assets/front/img/analiz.png" alt="img" class="waterfall__block-bg"
                         v-parallax="0.8">
                    <div class="waterfall__block-content"
                         v-parallax="1">
                        <h2 class="title title--small waterfall__block-title">
                            Анализ <br>
                            и проектирование
                        </h2>
                        <p class="waterfall__block-desc">
                            Мы знаем, как думает<br>
                            пользователь, и как это<br>
                            заложить в проект
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
                            Мы предлагаем адаптивную верстку<br>
                            каркаса сайта для гармоничного<br>
                            отображения на всех видах устройств,<br>
                            и разработку функционала любой<br>
                            сложности на базе фреймворка laravel
                        </p>
                    </div>
                </div>
                <div class="waterfall__block waterfall__block--grad-rotate waterfall__block--content">
                    <h2 class="title title--small waterfall__block-title">
                        Контент сайта
                    </h2>
                    <p class="waterfall__block-desc">
                        Мы обеспечим посетителей Вашего<br>
                        ресурса той информацией, за которой<br>
                        он пришел. Только достоверный<br>
                        и актуальный контент экспертного<br>
                        типа. Уникальный, полезный,<br>
                        информативный
                    </p>
                </div>
            </section>

            <penza-our-proj></penza-our-proj>

            <section class="news__main container container--content">
                <h2 class="title title--big title--color-main">Новости</h2>
                <div class="news__main-wrap">
                    <a href="" class="news__main-item">
                        <div class="news__item news__item--main">
                            <img src="/assets/front/img/news-1.png" alt="" class="news__item-img--main">
                            <h3 class="title title--small news__item-title">SECON'2021</h3>
                            <p class="news__item-desc">
                                SECON'2021 19-20 июня, «Арт-Пенза». Мы идём! А ты? Совсем
                                скоро мы соберемся, чтобы обсудить последние тренды IT-жизни,
                                послушать увлекательные доклады, завести новые полезные...
                            </p>
                            <div class="news__item-date">19.06.2021</div>
                            <a href="#" class="btn btn--normal btn--accent news__item-all">Посмотреть все новости</a>
                        </div>
                    </a>
                    <div class="news__grid">
                        <a href="#" class="news__item">
                            <img src="/assets/front/img/news-2.png" alt="" class="news__item-img">
                            <h3 class="title title--smallest news__item-title">SECON.HR-спринт</h3>
                            <div class="news__item-date">13.03.2021</div>
                        </a>
                        <a href="#" class="news__item">
                            <img src="/assets/front/img/news-3.png" alt="" class="news__item-img">
                            <h3 class="title title--smallest news__item-title">Городской доктор. Перезагрузка</h3>
                            <div class="news__item-date">2021</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="partners container">
                <h2 class="title title--big title--center title--color-main">Партнеры</h2>
                <div class="partners__list">
                    <img src="/assets/front/img/code-inside.png" alt="" class="partners__list-item">
                    <img src="/assets/front/img/secon.png" alt="" class="partners__list-item">
                    <img src="/assets/front/img/penza-online.png" alt="" class="partners__list-item">
                    <img src="/assets/front/img/rostelecom.png" alt="" class="partners__list-item">
                    <img src="/assets/front/img/yandex.png" alt="" class="partners__list-item">
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
