// import Vuetify from 'vuetify';
// import 'vuetify/dist/vuetify.min.css';
import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import ItemListComponent from "./components/ItemListComponent";

// Vue.use(Vuetify);
Vue.use(VueRouter);

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('header-component', HeaderComponent);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/item',
            name: 'item.list',
            component: ItemListComponent
        },
    ]
});

const app = new Vue({
    el: '#app',  
    // vuetify: new Vuetify()
    router
});