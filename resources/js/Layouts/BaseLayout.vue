<script setup>

</script>

<template>
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <!-- Header -->
        <header class="w-full bg-white shadow">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <h1 class="text-xl font-semibold text-gray-900">My App Is Great</h1>

                <!-- Example: right-side nav/actions -->
                <nav class="space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">About</a>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col items-center mt-6">
            <div class="w-full overflow-hidden bg-white px-6 py-4 sm:max-w-7xl sm:rounded-lg shadow-md">
                <slot />
            </div>
        </main>
    </div>
</template>


