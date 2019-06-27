<template>
  <div>
    <h1 class="uk-text-bold">Dashboard home</h1>
    <div class="uk-section">
      <div class="uk-flex" data-uk-grid>
        <div>
          <div class="uk-card uk-card-default">
            <div class="uk-card-body">
              <h3 class="uk-title uk-text-bold">Ingredients items:  {{ ingredientCount }}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  data(){
    return {
      ingredientCount: ''
    }
  },
  mounted(){
    this.getCount();
  },
  methods: {
    getCount(){
      axios.get('/api/ingredients')
      .then(({data}) => {
        this.ingredientCount = data.data.length;
      })
      .catch( err => {
        console.log(err.response.data.errors);
      })
    }
  }
}
</script>

<style>

</style>
