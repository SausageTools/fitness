<script setup>
import BaseLayout from '@/Layouts/BaseLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import { useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const form = useForm({
    name: '',
    description: ''
})

defineOptions({
    layout: BaseLayout
})

const addExercise = () => {
    form.post(route('exercises.store'));
}
</script>

<template>
    <h2>Add An Exercise</h2>
    <div>
        <form @submit.prevent="addExercise">
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div class="mt-4">
                <InputLabel for="description" value="Description" />
                <TextInput
                    id="description"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.description"
                />
                <InputError class="mt-2" :message="form.errors.description" />
            </div>
            <div class="mt-4">
                <PrimaryButton class="mt-4">
                    Add
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>
