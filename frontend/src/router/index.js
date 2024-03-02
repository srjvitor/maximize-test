import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import MateriaView from "../views/MateriaView.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/materia/:id",
    name: "materia",
    component: MateriaView,
    props: true,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
