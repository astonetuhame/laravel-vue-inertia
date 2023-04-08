<template>
  <h1>Hello {{ name }}</h1>

  <p>Frameworks we shall use are as below;</p>
  <ul v-for="framework of frameworks" :key="framework">
    <li>
      {{ framework }}
    </li>
  </ul>
</template>


<script>
export default {
  props: {
    name: String,
    frameworks: Array
  },
};
</script>

<style>
</style>