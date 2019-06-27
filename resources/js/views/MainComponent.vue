<template>
  <div>
    <div class="uk-flex" data-uk-grid>
      <div class="uk-card uk-width-1-6">
        <sidebar-component></sidebar-component>
      </div>
      <div class="uk-padding uk-width-5-6">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
import SidebarComponent from '../components/SidebarComponent'
export default {
  components: {
    SidebarComponent,
  },
  data(){
    return {

    }
  }
}
</script>

<style lang="scss" scoped>

</style>

