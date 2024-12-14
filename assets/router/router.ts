import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '../screen/HomePage.vue'
import NotFound from '../components/common/NotFound.vue'
export const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/test',
            component: HomePage,
            name: 'HomePage',
        },
        {
            path: '/:pathMatch(.*)*',
            component: NotFound,
            name: 'NotFound',
        },
    ],
})