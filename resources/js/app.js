/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-bar', require('./components/Navbar.vue').default);

Vue.component('footer-app', require('./components/Footer.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/////////////////////////////Vue-Router/////////////////////
import VueRouter from 'vue-router' 
Vue.use(VueRouter)



 let routes = [
    { path: '/', component: require('./components/Homepage.vue').default },
    { path: '/about', component: require('./components/About.vue').default },
    { path: '/responsibility', component: require('./components/Responsibility.vue').default },
    { path: '/registration', component: require('./components/Registration.vue').default },
    { path: '/requirement/:id', component: require('./components/Part-requirements.vue').default },

    ]
  
    const router = new VueRouter({
      mode: 'history',
      routes, // short for `routes: routes`
      linkActiveClass: 'nav-item active',
      scrollBehavior: (to) => {
        if (to.hash) {
          return {selector: to.hash}
        } else {
          return { x: 0, y: 0 }
        }
      }
    });
  

const app = new Vue({
    el: '#app',
    router,
});


