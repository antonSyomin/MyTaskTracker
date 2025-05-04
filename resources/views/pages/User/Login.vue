<style scoped lang="scss">
.s-login {
  display: block;

  &-content {
    overflow-x: scroll;
    display: block;
  }

  &-element {
    background-color: var(--black);
  }
}
</style>
<script setup>
console.log('qqq');

// Безымянная функция для вывода числа
function foo(n) {
    return n * 100 - 15;
}
</script>
<template>
    <div class="s-login">
        <div class="s-login__element">

        </div>
        {{ foo(1) }}
    </div>
</template>
