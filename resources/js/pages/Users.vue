<template>
  <Layout>
    <h1 class="text-4xl font-bold">Users</h1>
    <div style="margin-top: 400px">
      <p>The time is {{ time }}</p>
      <Link href="" class="text-blue-500 hover:underline" preserve-scroll
        >Refresh</Link
      >
    </div>
  </Layout>
</template>


<script>
import Layout from "@/Shared/Layout.vue";
import { Link } from "@inertiajs/vue3";

export default {
  components: { Layout, Link },
  props: {
    time: String,
  },
};
</script>

<style>
</style>