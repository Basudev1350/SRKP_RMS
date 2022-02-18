// require('./bootstrap');

// window.Vue = require('vue');
// import Vue from 'vue'
// import VueRouter from 'vue-router'
// import routes from './routes';

// Vue.use(VueRouter);

// newFunction();

// function newFunction()
// {
//   const ExampleComponent = new Vue({
//     el: '#ExampleComponent',
//     router: new VueRouter(routes)
//   });
// }
import './bootstrap'
import Vue from 'vue'
import Router from 'vue-router';
import routes from './routes'

Vue.use(Router);

const ExampleComponent = new Vue({
    el: '#ExampleComponent',
    router: new VueRouter(routes)
});