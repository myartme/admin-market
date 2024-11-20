<script setup>
defineProps({
    id: String,
    modelValue: { type: String, default: '', required: true },
    name: String,
    type: {
        type: String,
        default: 'text'
    },
    disabled: Boolean,
    required: Boolean,
    autocomplete: String,
    placeholder: String,
});
</script>

<template>
    <input
    :value="modelValue"
    :id="id"
    :name="name"
    :type="type"
    :autocomplete="autocomplete"
    :disabled="disabled"
    :required="required"
    :placeholder="placeholder"
    @input="$emit('update:modelValue', $event.target.value)"
    class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
>
</template>