import Vue from 'vue';
import VueRouter from 'vue-router';

import DashboardHomeComponent from './views/DashboardHomeComponent';
import IngredientsComponent from './views/ingredient/IngredientsComponent';
import AddIngredientComponent from './views/ingredient/AddIngredientComponent';

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/dashboard',
      name: 'DashboardHomeComponent',
      component: DashboardHomeComponent
    },
    {
      path: '/dashboard/ingredients',
      name: 'IngredientsComponent',
      component: IngredientsComponent
    },
    {
      path: '/dashboard/add-ingredients',
      name: 'AddIngredientsComponent',
      component: AddIngredientComponent
    }
  ]
});

export default router;