<script setup>
import { computed } from 'vue';

const props = defineProps({
    active: Boolean,
});

const classes = computed(() => {
  return `${props.active
      ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
      : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-info   focus:outline-none  focus:border-gray-300 transition duration-150 ease-in-out'} cursor-pointer`;
});

</script>

<template>
    <div @click="$emit('click')" :class="classes">
        <slot />
    </div>
</template>
