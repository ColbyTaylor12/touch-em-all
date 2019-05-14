<template>
  <div class="card" style="background-color:gray; color:black;">
        <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
        <div class="card-body">
          <h2>Beer</h2>
          <h5 class="card-title">$</h5>
          <p class="card-text"></p>
        </div>
      </div>
</template>

<script>
export default {
  name: "beer",
  props: ["beerPrice"],
  computed: {
    
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