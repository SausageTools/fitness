<script setup>
import BaseLayout from '@/Layouts/BaseLayout.vue';

const props = defineProps({
    exercise: Object
})

defineOptions({
    layout: BaseLayout
})

</script>

<template>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Exercise Details</h1>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-500 uppercase">Name</label>
                    <p class="text-lg text-gray-900">{{ props.exercise.name }}</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-500 uppercase">Description</label>
                    <p class="text-gray-700 whitespace-pre-line">{{ props.exercise.description }}</p>
                </div>
            </div>

            <div class="mt-8">
                <Link
                    :href="route('exercises.index')"
                    class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
                >
                    Back to list
                </Link>
            </div>
        </div>
    </div>
</template>
