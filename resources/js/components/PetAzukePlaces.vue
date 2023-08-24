<template>
  <div>
    <!-- Display the fetched places -->
    <ul>
      <li v-for="place in places" :key="place.id">{{ place.name }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      places: [], // Array to store fetched places
    };
  },
  mounted() {
    this.fetchPlaces();
  },
  methods: {
    async fetchPlaces() {
      try {
        const response = await fetch('/api/getAllPetAzukePlaces'); // Adjust the URL to match your API endpoint
        const data = await response.json();
        this.places = data;
      } catch (error) {
        console.error('Error fetching places:', error);
      }
    },
  },
};
</script>

<style scoped>
/* Add your component's styles here */
</style>
