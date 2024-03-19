<!-- CopyToClipboard.vue -->
<template>
    <div class="grid grid-cols-8 gap-2 w-full max-w-[23rem]">
        <label :for="id" class="sr-only">{{ label }}</label>
        <input :id="id" type="text" :value="text" :class="inputClasses" disabled readonly>
        <button @click="handleCopy" :disabled="status === 'copied'" :data-copy-to-clipboard-target="id"
            class="col-span-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center inline-flex justify-center">
            <span v-if="status === 'idle'" id="default-message">Copy</span>
            <span v-else-if="status === 'copied'" id="success-message" class="inline-flex items-center">
                <svg class="w-3 h-3 text-white me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 16 12">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5.917 5.724 10.5 15 1.5" />
                </svg>
                Copied!
            </span>
        </button>
    </div>
</template>

<script setup>
// 导入所需的响应式函数
import { defineProps, ref } from 'vue';

// 定义 props
const props = defineProps({
    id: String,
    label: String,
    text: String,
    inputClasses: String,
});

// 创建状态变量
const status = ref('idle');

// 复制操作处理函数
const handleCopy = () => {
    // 执行复制操作
    copyText(props.text, document.getElementById(props.id));

    // 将状态设置为 'copied'
    status.value = 'copied';

    // 1 秒后将状态更新为 'idle'
    setTimeout(() => {
        status.value = 'idle';
    }, 1000);
};

// 复制文本到剪贴板的函数
const copyText = (text, el) => {
    // 创建 textarea 元素
    const textarea = document.createElement('textarea');

    // 设置 textarea 的值
    textarea.value = text;

    // 将 textarea 添加到页面中
    document.body.appendChild(textarea);

    // 选中 textarea 的文本内容
    textarea.select();
    textarea.setSelectionRange(0, 99999); // 适用于移动设备

    // 执行复制命令
    document.execCommand('copy');

    // 移除 textarea 元素
    document.body.removeChild(textarea);
};
</script>