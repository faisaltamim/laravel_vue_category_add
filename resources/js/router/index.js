import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "../components/pages/home.vue";
import category_list from "../components/pages/category/index.vue";
import create_new_cat from "../components/pages/category/create_cat.vue";
// //routes write down
const routes = [
    // home route as follows
    {
        path: "/",
        name: "home",
        component: Home
    },
    //category list route as follows
    {
        path: "/category",
        name: "category-list",
        component: category_list
    },
    //create new category list route as follows
    {
        path: "/category/create-new",
        name: "new-category",
        component: create_new_cat
    },
];

const router = new VueRouter({
    routes,
    mode: "history"
});
export default router;
