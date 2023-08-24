import './bootstrap';
import Vue from 'vue';
import PetAzukePlaces from './components/PetAzukePlaces.vue';

Vue.component('pet-azuke-places', PetAzukePlaces);

const app = new Vue({
  el: '#app', // Adjust the element ID as needed
});