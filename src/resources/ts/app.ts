import { createApp } from "vue";
import PrimeVue from "primevue/config";
import { router } from "./router";
import App from "./app.vue";
import "primeflex/primeflex.css";
import "primeicons/primeicons.css";

const app = createApp(App);
app.use(PrimeVue);
app.use(router);
app.mount("#app");
