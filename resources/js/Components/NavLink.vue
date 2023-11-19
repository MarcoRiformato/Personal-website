<script setup>
import { defineProps, computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    active: Boolean,
    href: String
});

const classes = computed(() => {
    return props.active
        ? 'text-info mt-2 btn btn-ghost normal-case bg-neutral-focus'
        : 'mt-2 btn btn-ghost normal-case text-neutral-content';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
