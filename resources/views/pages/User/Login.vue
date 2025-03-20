<script setup>
</script>
<template>
    <div>
        <form>
            <el-input type="username" v-model="form.username" />
            <el-input type="password" v-model="form.username" />
            <button class="g-button">Войти</button>
        </form>
    </div>
</template>
<script>
import { ElInput, ElSwitch } from "element-plus";
</script>
