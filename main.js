const { createApp } = Vue;

createApp({
  data() {
    return {
      songs: null,
      activeSong: false,
      songNumber: 0,
    };
  },

  methods: {
    selectSong(index) {
      this.songNumber = index;
      this.activeSong = true;
    },
  },

  mounted() {
    axios.get("server.php").then((response) => {
      console.log(response.data);
      this.songs = response.data;
    });
  },
}).mount("#app");
