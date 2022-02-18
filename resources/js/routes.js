// import ExampleComponent from './components/ExampleComponent';

// export default{   
//     mode: 'history',
//     linkActiveClass: 'font-semibold',
//     routes: [ 

//             {
//                 path: '/example',
//                 component: ExampleComponent,
//                 name: 'ExampleComponent'
//             },
        
//     ]
// }


import ExampleComponent from './components/ExampleComponent';

export default {
    mode: 'history',

    routes: [
        {
                            path: '/example',
                            component: ExampleComponent,
                            name: 'ExampleComponent'
                        },
    ]
}
// import Vue from 'vue'
// import VueRouter from 'vue-router'
// import ExampleComponent from './components/ExampleComponent';

// Vue.use(VueRouter)

// const routes = [
//     {
//                         path: '/example',
//                         component: ExampleComponent,
//                         name: 'ExampleComponent'
//                     },

// ]

// export default new VueRouter({
//     routes
// })