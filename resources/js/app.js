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

const dashboard = new Vue({
    el: '#dashboard',
    router: new VueRouter(routes)
});
const categorywiseReport = new Vue({
    el: '#categorywiseReport',
    router: new VueRouter(routes)
});
const customReport = new Vue({
    el: '#customReport',
    router: new VueRouter(routes)
});
const manageCategory = new Vue({
    el: '#manageCategory',
    router: new VueRouter(routes)
});
const manageCompany = new Vue({
    el: '#manageCompany',
    router: new VueRouter(routes)
});
const manageGroups = new Vue({
    el: '#manageGroups',
    router: new VueRouter(routes)
});
const manageOrders = new Vue({
    el: '#manageOrders',
    router: new VueRouter(routes)
});
const manageProducts = new Vue({
    el: '#manageProducts',
    router: new VueRouter(routes)
});
const manageStore = new Vue({
    el: '#manageStore',
    router: new VueRouter(routes)
});
const manageTables = new Vue({
    el: '#manageTables',
    router: new VueRouter(routes)
});
const manageUsers = new Vue({
    el: '#manageUsers',
    router: new VueRouter(routes)
});
const menuwiseReport = new Vue({
    el: '#menuwiseReport',
    router: new VueRouter(routes)
});
const productAssembly = new Vue({
    el: '#productAssembly',
    router: new VueRouter(routes)
});
const productwiseReport = new Vue({
    el: '#productwiseReport',
    router: new VueRouter(routes)
});
const rawMaterials = new Vue({
    el: '#rawMaterials',
    router: new VueRouter(routes)
});
const viewallProducts = new Vue({
    el: '#viewallProducts',
    router: new VueRouter(routes)
});