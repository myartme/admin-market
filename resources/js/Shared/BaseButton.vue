<script setup>
defineProps({
    type: {
        type: String,
        default: 'button'
    },
});
</script>

<template>
    <button
        :type="type"
        class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center"
    >
        <slot />
    </button>
</template>