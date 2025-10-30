<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Pagination from '@/Components/Pagination.vue';
import BaseLayout from '@/Layouts/BaseLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';

defineOptions({
    layout: BaseLayout
})

const props = defineProps({
    exercises: Object
})

const destroy = (id) => {
    if (confirm('Are you sure?')) {
        router.delete(`/exercises/${id}`);
    }
}
</script>

<template>
    <Head title="Exercises, Yeah Baby!" />

    <Link :href="route('exercises.create')" class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 mt-4 mb-4">Add New Exercise</Link>

    <table class="min-w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Description</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="exercise in exercises.data" :key="exercise.id" class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                <td class="px-4 py-2">{{ exercise.name }}</td>
                <td class="px-4 py-2">{{ exercise.description }}</td>
                <td class="px-4 py-2">
                    <Link :href="route('exercises.show', exercise)" class="mr-2 inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900">View</Link>
                    <button @click.prevent="destroy(exercise.id)" class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <Pagination :links="exercises.links" />

</template>
