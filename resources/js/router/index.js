import { createWebHistory, createRouter } from "vue-router";
import Store from "../pages/Store.vue";
import Pos from "../pages/Pos.vue";
import Report from "../pages/Report.vue";
import Transection from "../pages/Transection.vue";
import User from "../pages/User.vue";
import Notfound from "../pages/Notfound.vue"

export const routes = [
    {
        name: "store",
        path: "/",
        component: Store,
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
    {
        name: "user",
        path: "/user",
        component: User,
    },
    {
        path: "/:catchAll(.*)",
        component: Notfound,
      },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
