<template>
  <div class="card" style="background-color:gray; color:black;">
    <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
    <div class="card-body">
      <h2>TicketPrice</h2>
      <h5 class="card-title">{{this.testingString}}</h5>
      <p class="card-text">{{this.testingString2}}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "ticket",
  props: ["experiences", "stadium"],
  methods: {
    getStadiumTicketPrices() {
      return this.ticketPrices.push(Number(this.stadium.ticket));
    },
    getExperienceTicketPrices(value) {
      let self = this;
      for (let i = 0; i < value.length; i++) {
        self.ticketPrices.push(Number(value[i].ticket));
      }
      this.ticketPrices = self.ticketPrices;
    },
    getTicketAvg() {
      function getSum(total, num) {
        return total + num;
      }   
      return this.ticketPrices.reduce(getSum)/this.ticketPrices.length;
    },
    setTicketAvg() {
      return this.getTicketAvg.toFixed(2);
    },
    computeAvgTicket(){
          return this.getTicketAvg.toFixed(2);
    }
  },
  computed:{

  },
  data() {
    return {
        ticketPrices: [],
        testingString: "test",
        testingString2: "test2",
        dataAvailable: false,
        experienceLength: 0
    };
  },
  created() { 
  },
  watch: {
    experiences: function(value){
      let json = value;
      this.experienceLength =  value.length;
      if(this.ticketPrices.length !== this.experienceLength){
        this.getExperienceTicketPrices(value);
      }
      
    },
    stadium: function(value){
      let json = value;
      this.testingString2 = json.ticket;
    }
  }
};
</script>

<style scoped>
</style>