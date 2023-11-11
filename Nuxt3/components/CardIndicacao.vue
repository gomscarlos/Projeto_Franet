<template>
  <div
    class="container flex w-full lg:w-1/2 max-[320px]:pl-2 max-[320px]:pr-2 max-[320px]:p-1 p-2 pl-4 pr-4 md:pl-6 md:pr-6 lg:pl-6 lg:pr-6 bg-[#e3e3e3] border max-[320px]:rounded-xl rounded-2xl md:rounded-3xl lg:rounded-3xl space-x-4 max-[320px]:space-x-2 items-center"
  >
    <img
      :src="user.image"
      alt=""
      class="rounded-full max-[320px]:w-14 w-20 lg:w-28 border border-gray-400"
    />
    <div class="flex flex-col text-left space-y-2 max-[320px]:space-y-1">
      <div class="flex space-x-2">
        <h3
          class="max-[320px]:text-[10px] font-bold text-xs md:text-md lg:text-xl"
        >
          {{ user.firstName }} {{ user.lastName }}
        </h3>
        <h3
          class="max-[320px]:text-[10px] text-xs md:text-md lg:text-xl"
          :class="estado"
        >
          {{ inscricao }}
        </h3>
      </div>
      <h3
        class="max-[320px]:text-[10px] text-xs md:text-md lg:text-xl text-gray-400"
      >
        Cadastro 14/08/2023
      </h3>
    </div>
  </div>
</template>

<script setup>
const { user } = defineProps(["user"]);

//Controle de cor do Estado da Inscrição - TESTE
const vermelho = "text-red-500";
const verde = "text-green-500";
const amarelo = "text-yellow-500";

const inscricao = ref("");
const estado = ref();
const num = ref(Math.floor(Math.random() * (3 - 1 + 1)) + 1);

if (num.value === 1) {
  inscricao.value = "Ativo";
  estado.value = verde;
} else if (num.value === 2) {
  inscricao.value = "Pendente";
  estado.value = amarelo;
} else {
  inscricao.value = "Expirado";
  estado.value = vermelho;
}
//Controle de cor do Estado da Inscrição - TESTE
</script>

<style scoped></style>
