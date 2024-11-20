<script setup>
    defineProps({
        id: String,
        name: String,
    });
</script>

<template>
    <label :for="id" class="inline-flex items-center">
        <input
            :id="id"
            type="checkbox"
            class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
            :name="name"
        >
        <span class="ms-2 text-sm text-gray-600"><slot /></span>
    </label>
</template>