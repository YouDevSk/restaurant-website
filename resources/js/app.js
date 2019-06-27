import './bootstrap'
import filters from './filters';
import axios from 'axios'
import Routes from './routes.js'

window.Vue = require('vue');
Vue.use('axios');

import MainComponent from './views/MainComponent';

const app = new Vue({
    el: '#app',
    router: Routes,
    components: {
        MainComponent,
    }
});
