<template>
  <div
    class="container flex flex-col lg:w-1/2 w-auto max-[320px]:p-4 p-5 md:p-10 lg:p-10 bg-[#f4f4f4] text-left text-[#004c25] font-bold border max-[320px]:rounded-xl rounded-2xl md:rounded-3xl lg:rounded-3xl shadow-xl"
  >
    <img :src="props.icone" alt="icone_usuarios" class="lg:w-16 md:w-10 w-5" />
    <h3
      class="lg:text-5xl md:text-3xl text-md max-[320px]:text-sm lg:mb-10 md:mb-6 mb-3"
    >
      {{ props.titulo }}
    </h3>
    <p class="lg:text-xl md:text-lg text-[8px] max-[320px]:text-[6px]">
      {{ props.texto }}
    </p>
  </div>
</template>

<script setup>
const props = defineProps({
  icone: {
    type: String,
  },
  titulo: {
    type: String,
  },
  texto: {
    type: String,
  },
});
</script>

<style scoped></style>
