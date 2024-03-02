<script setup>
import { useDayjs } from "#dayjs";
const { indicado } = defineProps(["indicado"]);

const emit = defineEmits(["update"]);

const dayjs = useDayjs();
dayjs().locale("pt-br").format();

const vencimento = ref();

const error = reactive([]);

async function handleSubmit() {
  vencimento.value = dayjs().add(30, "day").format("DD/MM/YYYY").toString();

  await $fetch("http://127.0.0.1:8000/api/userfranet/vencimento", {
    method: "PATCH",
    body: {
      situacao: "Ativo",
      telefoneIndicado: indicado.numeroIndicado,
      vencimento: vencimento.value,
    },
  })
    .then((res) => {
      emit("update");
    })
    .catch((errors) => {
      error.value = "Erro ao editar Indicado...";
    });
}
</script>

<template>
  <div
    class="container flex flex-col w-full lg:w-1/2 max-[320px]:pl-2 max-[320px]:pr-2 max-[320px]:p-1 p-2 pl-4 pr-4 md:pl-6 md:pr-6 lg:pl-6 lg:pr-6 bg-[#e3e3e3] border max-[320px]:rounded-xl rounded-2xl md:rounded-3xl lg:rounded-3xl items-start"
  >
    <div class="flex flex-row space-x-1">
      <h3
        class="max-[320px]:text-[8px] font-bold text-xs md:text-md lg:text-lg"
      >
        Número do usuário Franet:
      </h3>
      <h3 class="max-[320px]:text-[8px] text-xs md:text-md lg:text-lg">
        {{ indicado.userfranetNumero }}
      </h3>
    </div>

    <div class="flex flex-row space-x-1">
      <h3
        class="max-[320px]:text-[8px] font-bold text-xs md:text-md lg:text-lg"
      >
        Nome do Indicado:
      </h3>
      <h3 class="max-[320px]:text-[8px] text-xs md:text-md lg:text-lg">
        {{ indicado.nomeIndicado }}
      </h3>
    </div>

    <div class="flex flex-row space-x-1">
      <h3
        class="max-[320px]:text-[8px] font-bold text-xs md:text-md lg:text-lg"
      >
        Número do Indicado:
      </h3>
      <h3 class="max-[320px]:text-[8px] text-xs md:text-md lg:text-lg">
        {{ indicado.numeroIndicado }}
      </h3>
    </div>

    <div class="flex flex-row space-x-1">
      <h3
        class="max-[320px]:text-[8px] font-bold text-xs md:text-md lg:text-lg"
      >
        Parentesco:
      </h3>
      <h3 class="max-[320px]:text-[8px] text-xs md:text-md lg:text-lg">
        {{ indicado.parentesco }}
      </h3>
    </div>

    <div class="flex flex-row space-x-1">
      <h3
        class="max-[320px]:text-[8px] font-bold text-xs md:text-md lg:text-lg mb-2"
      >
        Cadastrado em:
      </h3>
      <h3 class="max-[320px]:text-[8px] text-xs md:text-md lg:text-lg">
        {{ indicado.cadastradoEm }}
      </h3>
    </div>
    <span
      v-if="error"
      class="text-red-500 max-[320px]:text-[8px] text-xs md:text-md lg:text-lg"
      >{{ error.value }}</span
    >

    <div class="flex w-full justify-center">
      <button
        @click.prevent="handleSubmit()"
        class="max-[320px]:w-1/3 w-1/4 xl:w-1/4 max-[320px]:p-1 p-2 bg-white font-bold max-[320px]:text-[10px] text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[white] hover:bg-[#108101]"
      >
        Aceitar
      </button>
    </div>
  </div>
</template>

<style lang="scss" scoped></style>
