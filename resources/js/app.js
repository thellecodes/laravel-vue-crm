require("./bootstrap");

window.Vue = require("vue");

Vue.component("app-component", require("./components/App.vue").default);
Vue.component("body-component", require("./components/Body.vue").default);

const app = new Vue({
    el: "#app",
});
