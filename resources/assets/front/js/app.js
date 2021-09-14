import Vue from 'vue';


import penzaHeader from './components/modules/PenzaHeader';

window.Vue = Vue;
window.axios = require('axios');

new Vue({
    el: '#app',
    components: {
        penzaHeader
    },
});
