<template>
  <div id="sidebar" class="uk-card uk-card-body uk-background-secondary uk-light" data-uk-sticky="offset: 80">
    <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
      <li class="uk-padding-remove">
        <router-link class="uk-nav-header" :to='{name:"DashboardHomeComponent"}'>Home</router-link>
      </li>
      <li class="uk-parent">
        <a class="uk-nav-header" href="">Ingredients</a>
        <ul class="uk-nav-sub">
          <li>
            <router-link :to='{name:"IngredientsComponent"}'>Ingredients</router-link>
          </li>
          <li>
            <router-link :to='{name:"AddIngredientsComponent"}'>Add Ingredient</router-link>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
  #sidebar {
    height: calc(100vh - 80px);
  }
</style>

