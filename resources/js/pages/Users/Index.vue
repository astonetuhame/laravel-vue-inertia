<template>
  <Head title="Users" />

  <div class="flex justify-between mb-2">
    <div class="flex items-center">
      <h1 class="text-4xl font-bold">Users</h1>
      <Link href="/users/create" class="text-blue-500 text-sm ml-3">New User</Link>

      <input
        v-model="search"
        type="text"
        placeholder="Search..."
        class="border px-2 rounded-lg"
      />
    </div>
  </div>

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


<script setup>
import Pagination from "@/Shared/Pagination.vue";
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
import debounce from "lodash/debounce"

let props = defineProps({ users: Object, filters: Object });

let search = ref(props.filters.search);

watch(search, debounce(function(value){
  router.get(
    "/users",
    { search: value },
    {
      preserveState: true,
      replace: true,
    }
  );
}, 300));
</script>

