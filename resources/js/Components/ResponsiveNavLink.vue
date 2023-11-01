<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    active: Boolean,
    href: String,
    as: String,
});

const classes = computed(() => {
    return props.active
    ? 'text-info  btn btn-ghost normal-case bg-neutral-focus'
    : ' btn btn-ghost normal-case text-neutral-content';
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" :class="classes" class="w-full text-left">
            <slot />
        </button>

        <Link v-else :href="href" :class="classes" class="text-center">
            <slot />
        </Link>
    </div>
</template>
