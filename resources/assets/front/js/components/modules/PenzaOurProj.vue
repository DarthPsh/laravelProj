<template>
    <section class="projects__slider container">
        <h2 class="title title--big title--color-main">Наши проекты</h2>
        <swiper :options="swiperOption" >
            <swiper-slide>
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
            </swiper-slide>
            <swiper-slide>
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
            </swiper-slide>
            <swiper-slide>
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
            </swiper-slide>
            <swiper-slide>
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
            </swiper-slide>
            <swiper-slide>
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
            </swiper-slide>
            <swiper-slide>
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
            </swiper-slide>
            <button class="btn btn--dark projects__slider-next swiper-button-next" slot="button-next"></button>
            <button class="btn btn--dark projects__slider-prev swiper-button-prev" slot="button-prev"></button>
        </swiper>
        <a href="#" class="btn btn--normal btn--accent projects__slider-all">Посмотреть все проекты</a>
    </section>
</template>

<script>
    export default {
        name: "PenzaOurProj",
        data: () => ({
            swiperOption: {
                navigation: {
                    nextEl: '.projects__slider-next',
                    prevEl: '.projects__slider-prev',
                },
            }
        }),
    }
</script>

<style scoped>

</style>
