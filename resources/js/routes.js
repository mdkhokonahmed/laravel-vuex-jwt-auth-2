import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//Auth component
import LoginComponent from './components/auth/login'
import LogoutComponent from './components/auth/LogoutComponent'

//Dashboard component
import DashboardComponent from './components/home/DashboardComponent'


//member component
//import memberComponent from './components/members/allMembers'
import memberComponent from './components/allMembers'

import store from './store'
const routes = [
    {
        path: '/',
        redirect: { name: 'login' }
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: DashboardComponent,
        meta: { requiresAuth: true }
    },
    {
        path: '/login',
        name: 'login',
        component: LoginComponent
    },
    {
        path: '/logout',
        name: 'logout',
        component: LogoutComponent
    },

    //member route

    { path: '/allmember', name: 'allmember', component: memberComponent},
]

const router = new VueRouter({
	mode: 'history',
    routes
})
router.beforeEach((to, from, next) => {

    // check if the route requires authentication and user is not logged in
    if (to.matched.some(route => route.meta.requiresAuth) && !store.state.isLoggedIn) {
        // redirect to login page
        next({ name: 'login' })
        return
    }

    // if logged in redirect to dashboard
    if(to.path === '/login' && store.state.isLoggedIn) {
        next({ name: 'dashboard' })
        return
    }

    next()
});

export default router