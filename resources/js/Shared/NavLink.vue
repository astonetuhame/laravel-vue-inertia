<template>
  <Link
    :class="{ 'font-bold underline': active }"
    class="text-blue-500 hover:underline"
  >
    <slot />
  </Link>
</template>
  
  
  <script>
import { Link } from "@inertiajs/vue3";
export default {
  components: { Link },
  props: {
    active: Boolean
  }
  
};
</script>
  
  <style>
</style>