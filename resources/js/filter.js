var moment = require('moment'); // require
import Vue from 'vue'
Vue.filter('dateFormate', (arg) => {
    return moment(arg).format("MMM Do YY");
})
