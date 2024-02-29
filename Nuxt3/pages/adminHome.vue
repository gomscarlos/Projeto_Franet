<template>
  <div
    class="flex flex-col h-full w-full items-center p-5 pt-12 pb-12 md:pt-20 lg:pt-20 md:pb-20 lg:pb-20"
  >
    <h1>Admin Page</h1>
    <h2>Name - {{ auth.getUser.name }}</h2>
    <h2>E-mail - {{ auth.getUser.email }}</h2>
  </div>
</template>

<script setup>
definePageMeta({
  layout: "authetication",
  middleware: ["auth"],
});

const auth = useAuthStore();
</script>

<style scoped></style>
