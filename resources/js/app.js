import Vue from "vue";

require("./bootstrap");
import routes from "./router/index";
import { HasError, AlertError } from "vform";

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

Vue.component("app_header", require("./components/header.vue").default);

const app = new Vue({
    el: "#app",
    router: routes
});
