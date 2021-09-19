<template>
    <header class="header"
            :class="{active: isActive}">
        <ul class="social">
            <li class="social__item">
                <a href="#" class="social__item-link">
                    <svg class="social__item-icon" width="20" height="20">
                        <use xlink:href="/assets/front/img/sprite.svg#icon-instagram"></use>
                    </svg>
                </a>
            </li>
            <li class="social__item">
                <a href="#" class="social__item-link">
                    <svg class="social__item-icon" width="20" height="20">
                        <use xlink:href="/assets/front/img/sprite.svg#icon-facebook"></use>
                    </svg>
                </a>
            </li>
            <li class="social__item">
                <a href="#" class="social__item-link">
                    <svg class="social__item-icon" width="20" height="20">
                        <use xlink:href="/assets/front/img/sprite.svg#icon-vk"></use>
                    </svg>
                </a>
            </li>
        </ul>
        <a href="/" class="header__logo">
            <img src="/assets/front/img/logo-cube.svg" alt="rosoperator-logo" class="header__logo-image">
        </a>
        <button class="btn burger"
                @click="clickBurger">
            <div class="burger__line burger__line--top"
                 :class="{active: isActive}"></div>
            <div class="burger__line burger__line--mid"
                 :class="{active: isActive}"></div>
            <div class="burger__line burger__line--bot"
                 :class="{active: isActive}"></div>
        </button>
        <div class="header__face container">
            <div class="header__half header__half--left">
                <div class="header__worktime">Режим работы: Пн-Чт: 8:30-17:30, Пт: 8:30-16:30</div>
            </div>
            <div class="header__half header__half--right">
                <a href="tel:+78412232313" class="header__half-item header__phone">+7 (841) 223-23-13</a>
                <form class="header__half-item header__search">
                    <input type="text" class="header__search-input">
                    <button class="btn header__search">
                        <svg width="20" height="20">
                            <use xlink:href="/assets/front/img/sprite.svg#icon-search"></use>
                        </svg>
                    </button>
                </form>
                <button class="btn btn--normal btn--accent header__btn">Подать заявку</button>
            </div>
        </div>
        <div class="header__back"
             :class="{active: isActive}">
            <ul class="header__menu">
                <li class="header__menu-item">
                    <a href="#" class="header__menu-item__link">ФРИТ</a>
                </li>
                <li class="header__menu-item">
                    <a href="/services" class="header__menu-item__link">Услуги</a>
                </li>
                <li class="header__menu-item">
                    <a href="/projects" class="header__menu-item__link">Проекты</a>
                </li>
                <li class="header__menu-item">
                    <a href="#" class="header__menu-item__link">Новости</a>
                </li>
                <li class="header__menu-item">
                    <a href="#" class="header__menu-item__link">Контакты</a>
                </li>
                <li class="header__menu-item">
                    <a href="#" class="header__menu-item__link">О нас</a>
                </li>
            </ul>
        </div>
        <ul class="lang">
            <li class="lang__item">
                <a href="#" class="lang__item-link">EN</a>
            </li>
            <li class="lang__item">
                <a href="#" class="lang__item-link active">RU</a>
            </li>
        </ul>
    </header>
</template>

<script>
    export default {
        name: "PenzaHeader",

        data() {
            return {
                isActive: false,
            }
        },

        methods: {
            clickBurger: function() {
                this.isActive = !this.isActive;
            }
        }
    }
</script>

<style scoped>

</style>
