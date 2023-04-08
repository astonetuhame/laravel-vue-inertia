<template>
  <Layout>
    <h1 class="text-4xl font-bold">Hello {{ name }}</h1>

    <p>Frameworks we shall use are as below;</p>
    <ul v-for="framework of frameworks" :key="framework">
      <li>
        {{ framework }}
      </li>
    </ul>
  </Layout>
</template>


<script>

export default {
  props: {
    name: String,
    frameworks: Array,
  },
};
</script>
