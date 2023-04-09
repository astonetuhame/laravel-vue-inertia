<template>
  <Head title="Users" />
  <h1 class="text-4xl font-bold mb-2">Users</h1>

  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
      <tbody class="bg-white divide-y divide-gray-200">
        <tr v-for="user of users.data" :key="user.id">
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
              <div class="text-sm font-medium text-gray-900">
                {{ user.name }}
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <Pagination class="mt-6" :links="users.links" />
  </div>
</template>


<script>
import Pagination from '@/Shared/Pagination.vue'
export default {
  props: {
    users: Object,
  },
  components: {Pagination}
};
</script>

