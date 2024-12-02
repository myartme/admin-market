<script setup>
import Layout from '../Shared/Layout.vue';

defineProps({
    categories: Object
})
</script>

<template>
    <Layout>
        <div class="pt-6 px-4">
            <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                Dashboard
            </div>
            <div v-for="category in categories" :key="category.id">
                <p>{{ category.name }}</p>
            </div>
        </div>
    </Layout>
</template>

