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
// Безымянная функция для вывода числа
function calculatePriceWithDiscount(n) {
    return n * 100 - 15;
}
</script>
<template>
    <div class="s-login">
        <div class="s-login-element">
            {{ calculatePriceWithDiscount(1) }}
        </div>
    </div>
</template>
