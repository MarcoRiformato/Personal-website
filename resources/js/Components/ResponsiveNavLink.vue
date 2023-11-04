<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    active: Boolean,
    as: String,
});

const classes = computed(() => {
    return props.active
    ? 'text-info  btn btn-ghost normal-case bg-neutral-focus'
    : ' btn btn-ghost normal-case text-neutral-content';
});
</script>

<template>
    <button :class="classes" @click="$emit('click')">
        <slot />
    </button>
</template>
