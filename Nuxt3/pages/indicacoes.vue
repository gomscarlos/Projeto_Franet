<script setup>
const form = reactive({
  numeroTelefone: "",
});

const dataUser = ref({});

const isOpen = ref(true);

const isLoading = ref(false);

function setIsOpen(value) {
  isOpen.value = value;
}

function setIsLoading(value) {
  isLoading.value = value;
}

async function handleSubmit() {
  setIsLoading(true);

  await useAsyncData(() => $fetch("https://dummyjson.com/users?limit=5"))
    .then((res) => (this.dataUser.value = res.data.value.users))
    .finally(setIsOpen(false));

  setIsLoading(false);
}
</script>

<template>
  <div
    class="flex flex-col w-full h-full p-6 text-center max-[320px]:space-y-3 space-y-4 md:space-y-8 lg:space-y-8 items-center"
  >
    <h1
      class="text-[#004c25] max-[320px]:text-xl text-3xl md:text-4xl lg:text-5xl"
    >
      Minhas indicações
    </h1>

    <form
      @submit.prevent="handleSubmit()"
      class="bg-[#ebebeb] flex w-full md:w-full lg:w-1/2 flex-col items-center text-left max-[320px]:p-6 p-8 md:p-12 lg:p-12 space-y-4 rounded-3xl"
      v-if="isOpen"
    >
      <label
        for="numero"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        style="margin-bottom: 16px"
        >Número de telefone:
        <input
          type="text"
          id="numero"
          v-model="form.numeroTelefone"
          placeholder="Digite seu número de telefone..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal max-[320px]:placeholder:text-[8px]"
      /></label>

      <button
        type="submit"
        class="max-[320px]:w-1/2 w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
      >
        Enviar
      </button>
    </form>

    <div v-else class="flex h-full w-full flex-col space-y-6 items-center">
      <Loading v-if="isLoading" message="Carregando dados..." />
      <div
        class="flex flex-col w-full h-full items-center"
        v-for="user in dataUser.value"
        :key="user.id"
        v-else
      >
        <CardIndicacao :user="user" />
      </div>
    </div>
  </div>
</template>

<style scoped></style>
