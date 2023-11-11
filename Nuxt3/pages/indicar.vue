<script setup>
const form = reactive({
  nome: "",
  numero: "",
  nomeIndicado: "",
  numeroIndicado: "",
  parentesco: "",
});

const isOpen = ref(true);

function setIsOpen(value) {
  isOpen.value = value;
}

const handleSubmit = () => {
  console.log(form);
  setIsOpen(false);
};
</script>

<template>
  <div
    class="flex h-full w-full justify-center p-5 pt-12 pb-12 md:pt-20 lg:pt-20 md:pb-20 lg:pb-20"
  >
    <form
      @submit.prevent="handleSubmit"
      class="bg-[#ebebeb] flex w-full md:w-auto lg:w-auto flex-col items-center max-[320px]:p-6 p-8 md:p-12 lg:p-12 space-y-4 rounded-3xl"
      v-if="isOpen"
    >
      <h1
        class="max-[320px]:text-lg text-2xl md:text-5xl lg:text-5xl text-[#3e3e3e] font-bold"
      >
        Preencha os dados
      </h1>
      <label
        for="nome"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Nome<input
          type="text"
          id="nome"
          v-model="form.nome"
          placeholder="Seu nome..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="numero"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        style="margin-bottom: 36px"
        >Número<input
          type="text"
          id="numero"
          v-model="form.numero"
          placeholder="Seu número..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="indicado"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Nome do indicado
        <input
          type="text"
          id="indicado"
          v-model="form.nomeIndicado"
          placeholder="Nome do indicado..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="numIndicado"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Número do indicado
        <input
          type="text"
          id="numIndicado"
          v-model="form.numeroIndicado"
          placeholder="Número do indicado..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="parentesco"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        style="margin-bottom: 16px"
        >Grau parentesco
        <input
          type="text"
          id="parentesco"
          v-model="form.parentesco"
          placeholder="Ex: Amigo, Primo..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <button
        type="submit"
        class="max-[320px]:w-1/2 w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
      >
        Enviar
      </button>
    </form>

    <div
      class="bg-[#ebebeb] flex w-full md:w-auto lg:w-auto flex-col max-[320px]:p-6 p-8 md:p-12 lg:p-12 text-center justify-center items-center rounded-3xl"
      v-else
    >
      <h2
        class="text-[#3e3e3e] font-black max-[320px]:text-sm text-xl md:text-2xl lg:text-2xl"
      >
        Sua indicação foi enviada com sucesso!
      </h2>
      <img
        src="https://cdn.discordapp.com/attachments/878707069979594813/1167602361162805258/enviar_1.png?ex=654eb96f&is=653c446f&hm=4500edf905133b468475778f110d35c2589671bba45c84fe406332256929bd92&"
        alt="logo_mensagem"
        class="w-24 md:w-32 lg:w-32 max-[320px]:mb-12 mb-16 md:mb-20 lg:mb-16 max-[320px]:mt-6 mt-8 md:mt-10 lg:mt-10"
      />
      <span
        class="text-[#3e3e3e] font-semibold max-[320px]:text-xs text-sm md:text-lg lg:text-lg"
        ><NuxtLink to="/indicacoes">Ver minhas indicações</NuxtLink></span
      >
    </div>
  </div>
</template>

<style scoped></style>
