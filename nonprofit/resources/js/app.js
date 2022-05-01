require('./bootstrap');

window.Vue = require('vue');

import {createApp} from 'vue';
import App from './Vue/App.vue'
createApp(App).mount('#app')
