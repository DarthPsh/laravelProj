import Vue from 'vue';

// import Vue and vue-parallax-js
import VueParallaxJs from 'vue-parallax-js'
// add vue-parallax-js to vue
Vue.use(VueParallaxJs)

import VueAwesomeSwiper from 'vue-awesome-swiper';
Vue.use(VueAwesomeSwiper);

import penzaHeader from './components/modules/PenzaHeader';
import penzaOurProj from './components/modules/PenzaOurProj';
import penzaInterfaceSlider from './components/modules/PenzaInterfaceSlider';
import penzaNumbers from './components/modules/PenzaNumbers';

window.Vue = Vue;
window.axios = require('axios');

new Vue({
    el: '#app',
    components: {
        penzaHeader, penzaOurProj, penzaInterfaceSlider, penzaNumbers
    },
});
