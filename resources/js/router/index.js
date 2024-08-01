import { createRouter, createWebHistory } from "vue-router";
import Login from "../components/auth/Login.vue";
import Register from "../components/auth/Register.vue";
import Index from "../components/dashboard/index.vue";
import CarDetails from "../components/dashboard/car-details.vue";

const routes = [
    {
        path: "/",
        name: "Dashboard",
        component: Index,
    },
    {
        path: "/car/:id?",
        name: "CarDetails",
        component: CarDetails,
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
