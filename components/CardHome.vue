<template>
  <div
    class="container flex flex-col lg:w-1/2 w-auto p-10 bg-[#f4f4f4] text-left text-[#004c25] font-bold border rounded-3xl shadow-xl"
  >
    <img :src="props.icone" alt="icone_usuarios" class="lg:w-16 w-10" />
    <h3 class="lg:text-5xl md:text-3xl text-xl lg:mb-10 md:mb-6 mb-3">
      {{ props.titulo }}
    </h3>
    <p class="lg:text-xl md:text-md text-xs">
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
