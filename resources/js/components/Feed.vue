<template>
<div>
  <experience v-for="experience in experiences" v-bind="experience" :key="experience.id"></experience>
  </div>
</template>

<style scoped>

</style>

<script>
export default {
  name: "feed",
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
    axios.get('/profile-experience', {
      params: {
        id: usersID
      }
    })
    .then(response => this.experiences = response.data);

  },
  mounted(){
   
  }
}
</script>