<template>
  <form action="">
    <label for="genre">Select Genre:</label>
    <select
      name="genre"
      id="genre"
      form="genreform"
      @input="$emit('input', $event.target.value)"
      @change="$emit('changeSelectValue')"
    >
      <option value="all">All</option>
      <option value="rock">Rock</option>
      <option value="pop">Pop</option>
      <option value="jazz">Jazz</option>
      <option value="metal">Metal</option>
    </select>
  </form>
</template>

<script>
export default {
    name: 'SelectGenre',
    props: {
    selectValue: String
    }
};
</script>

<style>
</style>