<template>
<AppLayout title="Leggi articolo">
    <div class="bg-gray-800 p-4">
    <div class="px-6 py-8 lg:px-8">
        <div class="mx-auto max-w-3xl text-base leading-7 ">
        <p class="text-base font-semibold leading-7 text-indigo-600">Dal nostro blog</p>
        <h1 class="mt-2 text-3xl text-primary font-bold tracking-tight sm:text-4xl">{{ post.title }}</h1>
        <p class="mt-6 text-xl leading-8">{{ post.meta_description }}</p>

        <div class="mt-10 max-w-2xl" v-html="post.content"></div>
        </div>
    </div>
    </div>
</AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { defineProps } from 'vue';

const props = defineProps({
post: Object,

randomCases: Array
});
</script>