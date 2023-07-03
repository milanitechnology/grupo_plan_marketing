import { createWebHistory, createRouter } from "vue-router";

const routes =  [
  {
    path: "/",
    alias: "/eletrodomesticos",
    name: "eletrodomesticos",
    component: () => import("./components/EletroList")
  },
  {
    path: "/eletrodomesticos/:id",
    name: "eletrodomesticos-details",
    component: () => import("./components/Eletro")
  },
  {
    path: "/add",
    name: "add",
    component: () => import("./components/AddEletro")
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;