<template>
  <div class="card col-2">
    <div class="card-img">
      <img :src="song.poster" alt="" />
    </div>
    <div class="card-text">
      <h3>{{ song.title }}</h3>
      <p>{{ song.author }}</p>
      <!-- <p>{{song.genre}}</p> -->
      <p>{{ song.year }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "MusicListComponent",
  props: {
    song: Object,
  },
};
</script>

<style lang="css" scoped>
@import "@/assets/scss/style.css";
.card {
  height: 260px;
  /* //   aspect-ratio: 1 / 1.2; */
  margin: 0.75rem auto;
  background-color: var(--bg-nav);
  /* // border: 2px solid rgb(6, 231, 62); */
}
.card-img {
  width: 80%;
  aspect-ratio: 1 / 1;
  margin: 1rem auto;
  /* //   border: 1px solid rgb(200, 146, 255); */
}
img {
  object-position: center;
  object-fit: contain;
}
.card-text {
  aspect-ratio: 1 / 0.5;
  margin: 1rem auto;
  /* //   border: 1px solid rgb(194, 191, 33); */
  text-align: center;
}
h3 {
  color: var(--text-white);
  margin-bottom: 1rem;
  font-size: 16px;
}
p {
  color: var(--text-gray);
  font-size: 14px;
}
</style>