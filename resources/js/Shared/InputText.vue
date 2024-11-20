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
    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
>
</template>