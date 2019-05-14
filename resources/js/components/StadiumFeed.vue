<template>
<div>
  <experience v-for="experience in experiences" v-bind="experience" :key="experience.id"></experience>
  </div>
</template>

<style scoped>

</style>

<script>
export default {
  name: "stadium-feed",
 data() {
    return {
     experiences: [],
     url: window.location.href,
    };
  },
  computed: {
    getStadium(){
      return this.url.slice(this.getIndex + 1);
    },

    getIndex(){
      return this.url.lastIndexOf("/");
    }
    
  },
  methods: {
    
  },
  compnonents: {
    
  },
  created() {
    axios.get('/stadium-experience', {
      params: {
        id: this.getStadium,
      }
    })
    .then(response => this.experiences = response.data);

  },
  mounted(){
   
  }
}
</script>