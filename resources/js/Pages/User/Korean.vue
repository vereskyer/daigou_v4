<!-- YourComponent.vue -->
<template>
    <Layouts>
        <div class="grid grid-cols-1 divide-y">
            
            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">1</span>
                    <span class="text-center flex-grow font-bold">您好！</span>
                </div>
                <div>
                    <CopyToClipboard id="hello" label="Label" text="안녕하세요?" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>

            <div class="grid grid-cols-3 divide-x">
                <div class="flex items-center">
                    <span class="text-left col-span-2 font-bold">1</span>
                    <span class="text-center flex-grow font-bold">2</span>
                </div>
                <div>
                    <CopyToClipboard id="npm-install" label="Label" text="npm install flowbite" inputClasses="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 
            dark:focus:border-blue-500" />
                </div>
            </div>
        </div>
    </Layouts>
</template>

<script setup>
// 导入所需的组件
import Layouts from './components/Layouts.vue';
import CopyToClipboard from './components/CopyToClipboard.vue';
</script>