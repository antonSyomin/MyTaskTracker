<script setup>
import { ElInput, ElSwitch } from "element-plus";
console.log('s');
</script>
<template>
    <div>
        <form @submit.prevent="submitLogin">
            <el-input type="username" v-model="form.username" />
            <el-input type="password" v-model="form.username" />
            <button class="s-button">Войти</button>
        </form>
    </div>
</template>
