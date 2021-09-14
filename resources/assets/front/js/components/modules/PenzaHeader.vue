<template>
    <header class="header">
        <a href="/" class="header__logo">
            <img class="header__logo-img" src="/assets/front/img/logo-cube.svg" alt="rosoperator-logo">
        </a>
        <div class="header__worktime">
            Режим работы: Пн-Чт: 8:30-17:30, Пт: 8:30-16:30
        </div>
        <div class="burger">
            <div class="burger__line"></div>
            <div class="burger__line"></div>
            <div class="burger__line"></div>
        </div>
        <a href="tel:+78412232313" class="header__phone">+7 (841) 223-23-13</a>
        <div class="header__search"></div>
        <button class="btn btn--normal btn--accent">Подать заявку</button>
    </header>
</template>

<script>
    export default {
        name: "PenzaHeader",
    }
</script>

<style scoped>

</style>
