<template>
  <footer>
    <div>
      <h4>Created with love by <span> ROMA &copy;</span></h4>
    </div>
  </footer>
</template>

<script>
export default {
  name: "SiteFooter",
};
</script>

<style lang="css" scoped>
@import "@/assets/scss/style.css";
div {
  width: 100%;
  height: 70px;
  background-color: var(--bg-nav);
  color: var(--text-white);
  text-align: center;
}

h4 {
  padding: 1.65rem 0;
}

h4 > span:hover{
    color: #1ed760;
    cursor: pointer;
}
</style>