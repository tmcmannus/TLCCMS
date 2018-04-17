require('./bootstrap')
window.Vue = require('vue')
import Buefy from 'buefy'
Vue.use(Buefy)

//Must have to bind this to work with VUE js
const app = new Vue({
 el: '#app'
});
