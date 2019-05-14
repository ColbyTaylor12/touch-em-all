<template>
<div>
  <div class="card-group">
    <div class="card" style="background-color:gray; color:black;">
      <img class="card-img-top" :src="this.img" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{this.stadium.name}}</h5>
        <p class="card-text">{{this.day_visited}}</p>
      </div>
    </div>
    <div class="card" style="background-color:gray; color:black;">
      <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
      <div class="card-body">
        <h2>Ticket</h2>
        <h5 class="card-title">${{this.ticket}}</h5>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="card" style="background-color:gray; color:black;">
      <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
      <div class="card-body">
        <h2>Beer</h2>
        <h5 class="card-title">${{this.beer}}</h5>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="card" style="background-color:gray; color:black;">
      <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
      <div class="card-body">
        <h2>Soda</h2>
        <h5 class="card-title">${{this.soda}}</h5>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="card" style="background-color:gray; color:black;">
      <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
      <div class="card-body">
        <h2>Hot Dog</h2>
        <h5 class="card-title">${{this.hot_dog}}</h5>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="card" style="background-color:gray; color:black;">
      <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
      <div class="card-body">
        <h2>Total Spent</h2>
        <h5 class="card-title">${{this.fixTotal}}</h5>
        <p class="card-text"></p>
      </div>
    </div>
    <!-- <div class="card" style="background-color:gray; color:black;">
      <img class="card-img-top" src="" alt="Card image cap">
      <div class="card-body">
        <div class="row pl-5">
        <a href="#" class="btn btn-primary btn-lg" role="button">Delete</a>
        </div>
        <div class="row pt-5 pl-5">
        <a :href="this.editLink" class="btn btn-primary btn-lg" role="button">Edit</a>
        </div>
      </div>
    </div> -->
  </div>
  </div>
</template>

<style scoped>
</style>

<script>
export default {
  name: "experience",
  props: ["id", "profile_id", "stadium_visited", "day_visited", "ticket", "beer", "soda", "hot_dog"],
  data() {
    return {
      img: '/img/stadiumsMain/' + this.stadium_visited + '.jpg',
      stadium: {name: ''},
      editLink: '/edit-experience/' + this.id,
      deleteLink: '/edit-experience/' + this.id,
    };
  },
  methods: {
   
  },
  computed: {
    getTotal(){
      return Number(this.ticket) + Number(this.beer) + Number(this.soda) + Number(this.hot_dog);
    },
    fixTotal(){
      return this.getTotal.toFixed(2);
    }
  },
  compnonents: {},
  created() {
    axios.get('/profile-stadium', {
      params: {
        id: this.stadium_visited
      }
    })
    .then(response => this.stadium = response.data);
  },
  mounted() {}
};
</script>