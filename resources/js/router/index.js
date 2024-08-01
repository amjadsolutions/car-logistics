import { createRouter, createWebHistory } from "vue-router";
import Login from "../components/auth/Login.vue";
import Register from "../components/auth/Register.vue";
import Index from "../components/dashboard/index.vue";

const routes = [
    {
        path: "/",
        name: "Login",
        component: Login,
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: Index,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
