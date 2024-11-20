<script setup>
import Nav from './Nav.vue';
</script>

<template>
    <div>
        <header>
            <Nav />
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>