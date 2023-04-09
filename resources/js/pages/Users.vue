<template>
  <Head title="Users" />

  <h1 class="text-4xl font-bold">Users</h1>
  <div style="margin-top: 400px">
    <p>The time is {{ time }}</p>
    <Link href="" class="text-blue-500 hover:underline" preserve-scroll
      >Refresh</Link
    >
  </div>
</template>


<script>
export default {
  props: {
    time: String,
  },
};
</script>

