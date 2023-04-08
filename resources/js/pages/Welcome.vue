<template>
  <h1>Hello {{ name }}</h1>

  <p>Frameworks we shall use are as below;</p>
  <ul v-for="framework of frameworks" :key="framework">
    <li>
      {{ framework }}
    </li>
  </ul>

  <Nav />
</template>


<script>
import Nav from "@/Shared/Nav.vue";

export default {
  props: {
    name: String,
    frameworks: Array,
  },
  components: { Nav },
};
</script>

<style>
</style>