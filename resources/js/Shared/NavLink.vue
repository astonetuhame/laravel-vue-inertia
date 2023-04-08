<template>
  <Link
    :class="{ 'font-bold underline': active }"
    class="text-blue-500 hover:underline"
  >
    <slot />
  </Link>
</template>
  
  
  <script>
export default {
  props: {
    active: Boolean
  }
  
};
</script>
  
  <style>
</style>