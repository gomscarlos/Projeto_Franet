<template>
  <div
    class="container flex w-full lg:w-1/2 max-[320px]:pl-2 max-[320px]:pr-2 max-[320px]:p-1 p-2 pl-4 pr-4 md:pl-6 md:pr-6 lg:pl-6 lg:pr-6 bg-[#e3e3e3] border max-[320px]:rounded-xl rounded-2xl md:rounded-3xl lg:rounded-3xl space-x-4 max-[320px]:space-x-2 items-center"
  >
    <img
      src="https://digimedia.web.ua.pt/wp-content/uploads/2017/05/default-user-image.png"
      alt="usuario"
      class="rounded-full max-[320px]:w-14 w-20 lg:w-28 border border-gray-400"
    />
    <div class="flex flex-col text-left space-y-2 max-[320px]:space-y-1">
      <div class="flex space-x-2">
        <h3
          class="max-[320px]:text-[10px] font-bold text-xs md:text-md lg:text-xl"
        >
          {{ user.nomeIndicado }}
        </h3>
        <h3
          class="max-[320px]:text-[10px] text-xs md:text-md lg:text-xl"
          :class="situacao"
        >
          {{ user.situacao }}
        </h3>
      </div>
      <h3
        class="max-[320px]:text-[10px] text-xs md:text-md lg:text-xl text-gray-400"
      >
        Cadastro {{ user.cadastradoEm }}
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

const situacao = ref();

if (user.situacao === "Ativo") {
  situacao.value = verde;
} else if (user.situacao === "Pendente") {
  situacao.value = amarelo;
} else {
  situacao.value = vermelho;
}
//Controle de cor do Estado da Inscrição - TESTE
</script>

<style scoped></style>
