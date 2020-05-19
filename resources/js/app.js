require('./bootstrap');

import Vue from 'vue'
// Start Vue Route
import VueRouter from 'vue-router'
Vue.use(VueRouter)

/*Route Inport*/
import {routes} from './routes';








/*Start Const Code*/
const router = new VueRouter({
  routes,
  mode: 'history'
})

const app = new Vue({
    el: '#app',
    router
});