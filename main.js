const { createApp } = Vue;

createApp({
  data() {
    return {
      songs: '',
    };
  },

  mounted() {
    axios
    .get("server.php")
    .then((response) => {
      //console.log(response.data);
      this.songs = response.data
    });
  },
}).mount("#app");
