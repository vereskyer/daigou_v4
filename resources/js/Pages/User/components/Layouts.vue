<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Sidebar from '@/Pages/Admin/components/Sidebar.vue'
import Navbar from '@/Pages/Admin/components/Navbar.vue'

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>
<template>
    <main class="p-4 md:ml-64 h-auto pt-20">
        <div class="antialiased bg-gray-50 dark:bg-gray-900">
            <!-- navigation -->
            <Navbar />

            <!-- Sidebar -->
            <Sidebar />

            <!-- main的内容 -->
            <slot />
        </div>
    </main>
</template>