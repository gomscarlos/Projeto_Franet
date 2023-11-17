<script setup>
const props = defineProps({
  errorName: {
    type: String,
  },
});
</script>

<template>
  <span class="font-normal text-xs md:text-sm lg:text-sm text-red-500">{{
    props.errorName
  }}</span>
</template>

<style scoped></style>
