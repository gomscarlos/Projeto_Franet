<script setup>
const props = defineProps({
  message: {
    type: String,
  },
});
</script>

<template>
  <div
    class="bg-[#ebebeb] flex w-full lg:w-1/2 flex-col items-center max-[320px]:p-6 p-8 md:p-12 lg:p-12 rounded-3xl max-[320px]:text-sm text-xl md:text-3xl lg:text-3xl text-[#3e3e3e]"
  >
    {{ props.message }}
  </div>
</template>

<style scoped></style>
