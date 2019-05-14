<template>
  <div>
    <div class="card-group">
      <ticket :experiences="this.experiences" :stadium="this.stadium"></ticket>
      <beer></beer>
      <soda></soda>
      <hot-dog></hot-dog>
    </div>
  </div>
</template>

<style scoped>
</style>

<script>
export default {
  name: "averages",
  data() {
    return {
      url: window.location.href,
      experiences: [],
      stadium: null,
      loadedBool: false,
      beerPrices: [],
      sodaPrices: [],
      hot_dogPrices: [],
      
    };
  },
  methods: {
    getExperience(){
      return axios.get("/stadium-experience");
    },
    getProfile(){
      return axios.get("/stadium-profile");
    }
  },
  computed: {
    getStadium() {
      return this.url.slice(this.getIndex + 1);
    },

    getIndex() {
      return this.url.lastIndexOf("/");
    },

    getStadiumLink() {
      return "/stadium-profile/" + this.getStadium;
    },

    // getStadiumBeerPrices() {
    //   return this.beerPrices.push(Number(this.stadium.beer));
    // },

    // getExperienceBeerPrices() {
    //   for (let i = 0; i < this.experiences.length; i++) {
    //     this.beerPrices.push(Number(this.experiences[i].beer));
    //   }
    //   return this.beerPrices;
    // },
    // getStadiumSodaPrices() {
    //   return this.sodaPrices.push(Number(this.stadium.soda));
    // },

    // getExperienceSodaPrices() {
    //   for (let i = 0; i < this.experiences.length; i++) {
    //     this.sodaPrices.push(Number(this.experiences[i].soda));
    //   }
    //   return this.sodaPrices;
    // },
    // getStadiumHotDogPrices() {
    //   return this.hot_dogPrices.push(Number(this.stadium.hot_dog));
    // },

    // getExperienceHotDogPrices() {
    //   for (let i = 0; i < this.experiences.length; i++) {
    //     this.hot_dogPrices.push(Number(this.experiences[i].hot_dog));
    //   }
    //   return this.hot_dogPrices;
    // }
  },
  compnonents: {},
  created() {
    axios
      .get("/stadium-experience", {
        params: {
          id: this.getStadium
        }
      })
      .then(response => (this.experiences = response.data));

    axios
      .get("/stadium-profile", {
        params: {
          id: this.getStadium
        }
      })
      .then(response => (this.stadium = response.data));



      this.loadedBool = true;
  },
  mounted() {
      this.$nextTick(function(){
        // axios.all([this.getExperience, this.getProfile])
        //   .then(axios.spread(function (exp, profile){
        //     this.stadium = profile.data;
        //     this.experiences = exp.data;
        //   }));
          axios
          .get("/stadium-experience", {
            params: {
              id: this.getStadium
            }
          })
          .then(response => (this.experiences = response.data));

        axios
          .get("/stadium-profile", {
            params: {
              id: this.getStadium
            }
          })
          .then(response => (this.stadium = response.data));

      })

  }
};
</script>