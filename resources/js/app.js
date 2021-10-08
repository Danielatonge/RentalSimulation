require('./bootstrap');

import Vue from 'vue';

import App from "./vue/App";
import Element from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(Element)

new Vue({
    el: '#app',
    render: h => h(App)
});

