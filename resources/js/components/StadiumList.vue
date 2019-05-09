<template>
  <div class=""> 
    <div class="heading text-center">
      <h1>Stadiums</h1>
    </div>
    <div class="card-deck">
    <stadium-card class="text-center mx-auto pb-3" v-for="stadium in stadiums" v-bind="stadium" :key="stadium.id"></stadium-card>
  </div>
  </div>
</template>

<script>
function Stadium({ id, name, home_team, location, year_opened }) {
  this.id = id;
  this.name = name;
  this.home_team = home_team;
  this.location = location;
  this.year_opened = year_opened;
}

function Team({ id, name, home_team, location, year_opened }) {
  this.id = id;
  this.team_name = team_name;
  this.league = league;
}

import stadiumcard from './StadiumCard.vue';

export default {
  name: "stadiumlist",

  data() {
    return {
      stadiums: null,
      teams: null,
      teamNames: [],
      newObj: null,
    };
  },
  methods: {
    setTeamName: function(){
     
    }
    
  },
  computed: {
   getTeamName: function() {
      for(let i=0; i<this.teams.length; i++){
        this.teamNames.push(this.teams[i].team_name);  
      }return this.teamNames;
   },
   getFullStadium: function(){
    
   } 
  },
  compnonents: {
    stadiumcard
  },
  created() {
    axios.get('/stadiums')
    .then(response => this.stadiums = response.data);

    axios.get('/teams')
    .then(response => this.teams = response.data);
  },
  mounted(){
   
  }
};
</script>

<style scoped>
</style>