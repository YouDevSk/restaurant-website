<template>
  <div>
    <h1 class="uk-text-bold">Add ingredient:</h1>
    <div class="uk-section">
      <form>
        <fieldset class="uk-fieldset">
          <div class="uk-margin">
            <input type="text" name="name" class="uk-input" v-model="ingredient.name" placeholder="Add ingredient name">
          </div>
          <div v-if="errorHandler">
            <p class="uk-alert-danger" v-for="(error, index) in errors.name" :key="index" data-uk-alert>
              {{error}}
            </p>
          </div>
          <div class="uk-margin">
            <button @click.prevent="addIngredient()" type="submit" class="uk-button uk-button-primary">
              Add Ingredient
            </button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data(){
    return {
      ingredient:{
        name: ''
      },
      errorHandler: false,
      errors: {}
    }
  },
  methods: {
    addIngredient(){
      axios.post('/api/ingredient', this.ingredient)
      .then( ({data}) => {
        this.errors = '',
         UIkit.notification({
              message: 'Ingredient has been added!',
              status: 'primary',
              pos: 'top-center',
              timeout: 5000
          });
        this.ingredient.name = ''
      })
      .catch(err => {
        this.errorHandler = true,
        this.errors = err.response.data.errors
      })
    }
  }
}
</script>

<style>

</style>
