require('./bootstrap');
import Vue from 'vue'

// Vuex Support 
import Vuex from 'vuex'
Vue.use(Vuex)

// Vform Support
import { Form, HasError, AlertError } from 'vform'
window.Form = Form
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//Notification
import VueAWN from "vue-awesome-notifications"
import 'vue-awesome-notifications/dist/styles/style.css';
let options = {
	position : "top-right",
}
Vue.use(VueAWN, options)

import Backstore from './stores/backstore'
const store = new Vuex.Store({
  modules: {
    backstore: Backstore,
    // frontstore: Frontstore,
    // backstore: Backstore,
  }
})





//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/inc/header.vue').default);
Vue.component('sidebar-component', require('./components/inc/sidebar.vue').default);
Vue.component('user-component', require('./components/inc/username.vue').default);
import AppComponent from './components/AppComponent'

import router from './routes.js';
const app = new Vue({
	 components: { AppComponent },
    router,
    store
}).$mount('#app')
