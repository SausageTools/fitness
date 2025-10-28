<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  links: {
    type: Array,
    required: true
  }
})
</script>

<template>
  <div v-if="links.length > 3" class="flex flex-wrap gap-1 mt-6">
    <template v-for="(link, index) in links" :key="index">
      <Link
        v-if="link.url"
        :href="link.url"
        v-html="link.label"
        class="px-3 py-1 border rounded text-sm"
        :class="{
          'bg-blue-600 text-white border-blue-600': link.active,
          'text-gray-700 hover:bg-gray-100 border-gray-300': !link.active
        }"
      />
      <span
        v-else
        v-html="link.label"
        class="px-3 py-1 text-gray-400 border border-transparent text-sm select-none"
      />
    </template>
  </div>
</template>

