<template>
  <div class="text-center p-5">
    <div class="card p-3">
      <img class="card-img-left" :src="this.image" :alt="this.name">
      <div class="card-body">
        <h5 class="card-title">{{this.name}}</h5>
        <ul class="card-text">
          <li>Location: {{this.location}}</li>
          <li>Year Opened: {{this.year_opened}}</li>
          <li>Home Team: {{this.team_name}}</li>
        </ul>

        <a
        :href="this.stadiumURL" class="btn btn-primary">Stadium Profile</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "stadiumcard",
  props: ["id", "name", "home_team", "location", "year_opened", "team_name", "league"],
  computed: {
    image() {
         return '/img/stadiums/' + this.id + '.jpg';
    },
    stadiumURL(){
       return "/stadium-profile/" + this.id; 
    }
  },
  data() {
    return {
      
    };
  },
  created() {
    
  }
};
</script>

<style scoped>
</style>