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
    };
  },
  methods: {
    
    
  },
  computed: {
  
    
  },
  compnonents: {
    
  },
  created() {
    axios.get('/stadium-experience', {
      params: {
        id: 1
      }
    })
    .then(response => this.experiences = response.data);

  },
  mounted(){
   
  }
}
</script>