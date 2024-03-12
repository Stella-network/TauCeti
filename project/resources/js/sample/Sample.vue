<script setup>
import { ref } from 'vue'

const title = ref('Laravel with Vue3')
const message = ref('This is a sample component using Vue3 with Laravel. this message is a constant of JavaScript in resources/js/sample/Sample.vue')
</script>

<template>
  <center>
    <h1 class="d-flex w-100">{{ title }}</h1>
    <p>
      {{ message }}
    </p>
  </center>
</template>
