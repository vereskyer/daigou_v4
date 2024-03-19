<script setup>
import Layouts from './components/Layouts.vue';
import CopyToClipboard from './components/CopyToClipboard.vue'

// 教程
// https://www.youtube.com/watch?v=cTIs0yNsZik
</script>
<template>
    <Layouts>
        <div>
            <h1>korean</h1>
        </div>
        <CopyToClipboard v-slot="props">
            <button 
                @click="props.copy('korean')"
                :disabled="props.status === 'copied'">
            {{ props.status === 'copied' ? 'Copied' : 'Copy' }}
            </button>
        </CopyToClipboard>
    </Layouts>
</template>