<template>
  <div
    class="flex flex-col w-full h-full p-6 text-center max-[320px]:space-y-3 space-y-4 md:space-y-8 lg:space-y-8 items-center"
  >
    <h1
      class="text-[#004c25] max-[320px]:text-xl text-3xl md:text-4xl lg:text-5xl"
    >
      Minhas indicações
    </h1>
    <div
      v-if="pending"
      class="bg-[#ebebeb] flex w-full lg:w-1/2 flex-col items-center max-[320px]:p-6 p-8 md:p-12 lg:p-12 rounded-3xl max-[320px]:text-sm text-xl md:text-3xl lg:text-3xl text-[#3e3e3e]"
    >
      Carregando dados...
    </div>
    <div
      class="flex flex-col w-full h-full items-center space-y-6"
      v-for="user in data.users"
      :key="user.id"
      v-show="true"
      v-else
    >
      <CardIndicacao :user="user" />
    </div>

    <form
      class="bg-[#ebebeb] flex w-full md:w-full lg:w-1/2 flex-col items-center text-left max-[320px]:p-6 p-8 md:p-12 lg:p-12 space-y-4 rounded-3xl"
      v-show="false"
    >
      <label
        for="numero"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        style="margin-bottom: 16px"
        >Número de telefone:
        <input
          type="text"
          id="numero"
          placeholder="Digite seu número de telefone..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal max-[320px]:placeholder:text-[8px]"
      /></label>

      <button
        type="button"
        class="max-[320px]:w-1/2 w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
      >
        Enviar
      </button>
    </form>
  </div>
</template>

<script setup>
const { data, pending } = await useFetch(
  "https://dummyjson.com/users?limit=5",
  { lazy: true }
);
</script>

<style scoped></style>
