<template>
  <Link
    :class="{ 'font-bold underline': active }"
    class="text-black hover:underline"
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