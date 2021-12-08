import { createWebHistory, createRouter } from "vue-router";
import Home from "../pages/Home.vue";
import Pos from "../pages/Pos.vue";
import Report from "../pages/Report.vue";
import Transection from "../pages/Transection.vue";

export const routes = [
    {
        name: "home",
        path: "/",
        component: Home,
    },
    {
        name: "pos",
        path: "/pos",
        component: Pos,
    },
    {
        name: "report",
        path: "/report",
        component: Report,
    },
    {
        name: "transection",
        path: "/transection",
        component: Transection,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
