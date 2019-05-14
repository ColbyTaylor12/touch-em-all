<template>
  <div>
    <div class="card">
      <img class="card-img-left" src alt="name">
      <div class="card-body">
        <h5 class="card-title">Average Prices</h5>
        <ul class="card-text">
          <li>{{this.location}}</li>
          <li>{{this.year_opened}}</li>
          <li>List item</li>
        </ul>

        <a
        :href="this.stadiumURL"  class="btn btn-primary">Stadium Profile</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "stadiumprofile",
  props: [],
  computed: {
    image() {
      //   return '/img/stadiums/${this.id}.png';
    },
    getID() {
      return this.id
    },
  },
  methods: {
   
  },
  data() {
    return {
      stadium: [],
      id: null,
      currentUrl: null,
    };
  },
  mounted() {
  
  },
  created() {
    
  }
};
</script>

<style scoped>
</style>