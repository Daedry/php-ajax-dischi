<template>
  <header>
    <nav class="d-flex">
      <Logo />
      <SelectGenre v-model="selectGenre" @changeSelectValue="selectGenre" />
      <SearchSongName v-model="searchText" @formSubmit="searchSong" />
    </nav>
  </header>
</template>

<script>
import Logo from "@/components/LogoComponent";
import SearchSongName from "@/components/SearchSongName";
import SelectGenre from "@/components/SelectGenre";
import state from "@/state.js";
export default {
  name: "SiteHeader",
  components: {
    Logo,
    SearchSongName,
    SelectGenre,
  },
  data() {
    return {
      searchText: "",
      selectGenre: "",
    };
  },
  methods: {
    // searchSong(){
    //   console.log('Searching...');
    //   console.log(this.searchText);
    //   state.searchText = this.searchText;
    //   console.log(state);
    // },
    selectGender() {
      console.log(this.selectGenre);
      state.selectGenre = this.selectGenre;
      console.log(state);
    },
  },
};
</script>

<style lang="css" scoped>
@import "@/assets/scss/style.css";
nav {
  width: 100%;
  height: 50px;
  background-color: var(--bg-nav);
  border-top: 1px solid var(--bg-main);
  justify-content: space-between;
}

form {
  height: 2rem;
  margin: 0.5rem 3rem 0.5rem 0;
}

.btn {
  padding: 0.45rem 0.75rem;
}
form > label {
  color: var(--text-white);
  padding: 0.5rem 1rem 0.5rem 2rem;
}
form > select {
  margin-right: 3rem;
  padding: 0.5rem 1rem;
}
</style>