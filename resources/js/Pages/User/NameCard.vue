<template>
    <Layouts>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Name Card</h2>
                    <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">
                        市场档口取货请截图左边，需要商家快递发货，请截图右边</p>

                </div>
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                    <div
                        class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Avatar">
                        </a>
                        <div class="p-5">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <a href="#">마이클-{{ user.name }} </a>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400 text-sm"> 이름으로 적어주세요</span>

                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                                픽업 삼촌: 010.8255.7594</p>
                        </div>
                    </div>
                    <div
                        class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Avatar">
                        </a>
                        <div class="p-5">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <a href="#">마이클-{{ user.name }} </a>
                            </h3>
                            <span class="text-gray-500 dark:text-gray-400 text-sm"> 이름으로 적어주세요</span>

                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                                전화: 010.5598.5115</p>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                                주소: 서울 동대문구 한천로 440 2층 천한무역</p>
                            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                                우편번호: 02423</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </Layouts>
</template>
<script setup>
import Layouts from '@/Pages/User/components/Layouts.vue'
import { usePage } from '@inertiajs/vue3'

const user = usePage().props.auth.user
</script>