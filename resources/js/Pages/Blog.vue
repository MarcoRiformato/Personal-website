<template>
  <AppLayout title="Blog">
    <div class="py-5">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl">
          <h2 class="text-3xl font-bold tracking-tight text-success sm:text-4xl">Dal mio blog</h2>
          <p class="mt-2 text-lg leading-8 ">Learn how to grow your business with our expert advice.</p>
          
          <div class="mt-10 space-y-16 border-t border-gray-200 pt-10">
            <div v-for="post in posts" :key="post.slug" @click="$inertia.visit(route('blog.show', { slug: post.slug }))" class="cursor-pointer">
              <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                  <time :datetime="post.datetime" class="text-xs">{{ post.date }}</time>
                  <p class="relative z-10 rounded-full bg-red-100 px-3 py-1.5 font-medium text-secondary">{{ post.category }}</p>
                </div>
                
                <div class="group relative mt-3">
                  <h3 class="text-lg font-semibold leading-6 text-primary group-hover:underline">{{ post.title }}</h3>
                  <p class="mt-5 line-clamp-3 text-sm leading-6">{{ post.meta_description }}</p>
                  <p class="mt-2 text-sm font-semibold leading-6 text-indigo-600" aria-describedby="featured-post">Leggi <span aria-hidden="true">&rarr;</span></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { defineProps } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
  posts: Array
});
</script>
