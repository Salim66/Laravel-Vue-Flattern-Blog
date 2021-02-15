
require('./bootstrap');

window.Vue = require('vue').default;

//Support Vue Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

//Filter | formating
var moment = require('moment'); // require
Vue.filter('dateFormate', (arg) => {
    return moment(arg).format("MMM Do YY");
})

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-home', require('./components/admin/AdminMaster.vue').default);

//Vue Router Instance
import {routes} from './routes'
const router = new VueRouter({
    routes // short for `routes: routes`
  })


const app = new Vue({
    el: '#app',
    router
});
