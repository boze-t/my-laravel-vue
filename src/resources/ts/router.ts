import { createRouter, createWebHistory } from "vue-router";
import AppHome from "./app-home.vue";

export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/",
      name: "Home",
      component: AppHome,
    },
  ],
});
