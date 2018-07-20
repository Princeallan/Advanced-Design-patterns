window._ = require('lodash');

window.Vue = require('vue');

window.axios = require('axios');

import ElementUI from 'element-ui';

import 'element-ui/lib/theme-chalk/index.css';

import locale from 'element-ui/lib/locale/lang/en';

Vue.use(ElementUI, {locale});

require('./bootstrap');

require('./components');

const app = new Vue({
    el: '#app'
});
