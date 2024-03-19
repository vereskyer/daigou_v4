<script setup>
// 导入所需的响应式函数和生命周期钩子
import { ref } from 'vue';

// 定义组件的状态
const status = ref('idle');

// 定义复制方法
const copy = (text) => {
    // 创建 textarea 元素
    const el = document.createElement('textarea');

    // 设置元素的值
    el.value = text;

    // 设置 textarea 样式
    el.style.position = 'absolute';
    el.style.left = '-90000px';
    document.body.appendChild(el);

    // 选择文本内容
    el.select();
    el.setSelectionRange(0, 99999); // 适用于移动设备

    // 执行复制命令
    document.execCommand('copy');

    // 移除 textarea 元素
    document.body.removeChild(el);

    // 更新状态为 'copied'
    status.value = 'copied';

    // 1 秒后将状态更新为 'idle'
    setTimeout(() => status.value = 'idle', 1000);
}
</script>

<template>
    <!-- 在插槽中传递状态和复制方法 -->
    <slot :status="status" :copy="copy"></slot>
</template>
