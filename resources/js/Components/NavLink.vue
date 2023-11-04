<script setup>
import { defineProps, computed } from 'vue';

const props = defineProps({
    active: Boolean,
    // Remove the href prop if you're not using it for actual navigation
});

const classes = computed(() => {
    return props.active
        ? 'text-info mt-2 btn btn-ghost normal-case bg-neutral-focus'
        : 'mt-2 btn btn-ghost normal-case text-neutral-content';
});
</script>

<template>
    <button :class="classes" @click="$emit('click')">
        <slot />
    </button>
</template>
