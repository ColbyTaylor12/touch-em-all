<template>
  <div class="text-center p-5 cards" :onload="this.getStadium()">
            <div class="card p-4" style="background-color:gray; color:black;">
                <div class="card-body">
                    <h1 class="card-title" style="font-weight:900;">{{this.profile.username}}</h1>
                    <h2 class="card-title" style="font-weight:900;"> My Home Stadium: {{this.stadium.name}}</h2>
                    <img class="card-img-left" :src="this.setImg" :alt="this.stadium.name">
                </div>
            </div>
        </div>
</template>

<style scoped>

</style>

<script>
export default {
  name: "ProfileHeader",
 data() {
    return {
      profile:[],
      stadium:{name: ''},
      // profileStadium: this.getProfileStadium(),
      img: null,
    };
  },
  methods: {
    getStadium(){
      axios.get('/profile-stadium', {
      params: {
        id: this.profile.home_stadium
      }
    })
    .then(response => this.stadium = response.data);
    },  
    
  },
  computed: {
    setImg(){
      return "/img/stadiumsMain/" + this.profile.home_stadium + ".jpg"
    }
    
  },
  compnonents: {
    
  },
  created() {
    axios.get('/user-profile', {
      params: {
        id: usersID
      }
    })
    .then(response => this.profile = response.data);

    
  },
  mounted(){
   
  }
}
</script>