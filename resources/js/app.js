/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import Vue from "vue";

import Bootstrap from "./assets/css/bootstrap.css";
import Css_slider from "./assets/css/css_slider.css";
import Style from "./assets/css/style.css";
import FA from "./assets/css/font-awesome.min.css";
import App from "./App.vue";
import Routes from "./routes";
import NProgress from "nprogress";
import VueRouter from "vue-router";
import moment from "moment-timezone";
import HelperMixin from "./studio/mixins/HelperMixin";
import RequestMixin from "./studio/mixins/RequestMixin";

window.Popper = require("popper.js").default;
Vue.prototype.moment = moment;

// Set the default timezone
moment.tz.setDefault(Studio.timezone);

Vue.mixin(HelperMixin);
Vue.mixin(RequestMixin);

// Prevent the production tip on Vue startup
Vue.config.productionTip = false;

Vue.use(VueRouter);

const router = new VueRouter({
    routes: Routes,
    mode: "history",
    base: "/"
});

router.beforeEach((to, from, next) => {
    NProgress.start();
    NProgress.set(0.5);
    next();
}),
    router.afterEach(() => {
        setTimeout(() => NProgress.done(), 20);
    });

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    Bootstrap,
    Css_slider,
    Style,
    FA,
    router,
    data: {
        avatar: Studio.avatar
    },
    render: h => h(App),
    components: {
        App
    }
}).$mount("#app");
