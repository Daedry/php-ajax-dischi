<template>
  <div class="logo">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg"
      alt=""
    />
  </div>
</template>

<script>
export default {
    name: 'LogoComponent'
};
</script>

<style lang="css" scoped>
@import '@/assets/scss/style.css';
.logo {
  width: 35px;
  padding: 0.4rem 0;
  margin-left: 4rem;
}
</style>