<template>
    <section class="section project__interface">
        <h2 class="title title--big title--center title--color-main">Описание проекта</h2>
        <div class="project__interface-slider">
            <swiper :options="swiperOption" >
                <swiper-slide>
                    <div class="project__interface-item">
                        <img src="/assets/front/img/interface.png" alt="" class="project__interface-item__img">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="project__interface-item">
                        <img src="/assets/front/img/interface.png" alt="" class="project__interface-item__img">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="project__interface-item">
                        <img src="/assets/front/img/interface.png" alt="" class="project__interface-item__img">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="project__interface-item">
                        <img src="/assets/front/img/interface.png" alt="" class="project__interface-item__img">
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="project__interface-item">
                        <img src="/assets/front/img/interface.png" alt="" class="project__interface-item__img">
                    </div>
                </swiper-slide>
            </swiper>
        </div>
    </section>
</template>

<script>
    export default {
        name: "PenzaInterfaceSlider",
        data: () => ({
            swiperOption: {
                // width: 1052,
                slidesPerView: 2,
                spaceBetween: 50,
                centeredSlides: true,
            }
        }),
    }
</script>

<style scoped>

</style>
