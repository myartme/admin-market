<script setup>
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue';
</script>

<template>
    <Navbar />
    <div class="flex overflow-hidden bg-white pt-16">
        <Sidebar />
        <div class="main-content h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                <slot />
            </main>
            <p class="text-center text-sm text-gray-500 my-10">
                © 2024. All rights reserved.
            </p>
        </div>
    </div>
</template>