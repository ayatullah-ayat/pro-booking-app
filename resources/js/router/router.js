import { createRouter, createWebHistory } from 'vue-router';

// import Welcome from "../components/Welcome";
import Bookable from "../bookable/Bookable";
import Article from "../components/Article";

const routes = [
    {
        path: "/",
        component: Bookable
    },
    {
        path: "/second",
        component: Article
    },
];

const router = new createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router;
