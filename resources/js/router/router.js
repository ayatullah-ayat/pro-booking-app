import { createRouter, createWebHistory } from 'vue-router';

// import Welcome from "../components/Welcome";
import Bookables from "../bookables/Bookables";
import Bookable from "../bookable/Bookable";

const routes = [
    {
        path: "/",
        component: Bookables
    },
    {
        path: "/bookables/:id",
        component: Bookable,
        name: 'bookable'
    },
];

const router = new createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router;
