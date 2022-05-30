<template>
  <form class="d-flex" @submit.prevent="$emit('formSubmit')">
    <label for="genre">Search Song:</label>
    <input
      type="search"
      placeholder="Search"
      aria-label="Search"
      :value="searchText"
      v-on:input="$emit('input', $event.target.value)"
      @keyup="$emit('formSubmit')"
    />
    <button class="btn" type="submit">Search</button>
  </form>
</template>

<script>
export default {
  name: "SelectBox",
  props: {
    searchText: String,
  }
};
</script>

<style>
</style>