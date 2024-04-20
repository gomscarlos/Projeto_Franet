<script setup>
import { useDayjs } from "#dayjs";

const dayjs = useDayjs();
dayjs().locale("pt-br").format();

definePageMeta({
  layout: "authetication",
  middleware: ["auth"],
});

const auth = useAuthStore();

const indicados = reactive([]);

const error = reactive([]);

const isLoading = ref(true);

const date = ref();
date.value = dayjs();

function setIsLoading(value) {
  isLoading.value = value;
}

await $fetch("http://127.0.0.1:8000/api/userfranet/expirado", {
  method: "GET",
}).then((res) => {
  if (res.length !== 0) {
    res.forEach((element) => {
      const dataLimite = dayjs(
        element.vencimento[6] +
          element.vencimento[7] +
          element.vencimento[8] +
          element.vencimento[9] +
          "-" +
          element.vencimento[3] +
          element.vencimento[4] +
          "-" +
          element.vencimento[0] +
          element.vencimento[1]
      ).toDate();

      if (dataLimite < date.value) {
        $fetch("http://127.0.0.1:8000/api/userfranet", {
          method: "PATCH",
          body: {
            situacao: "Expirado",
            telefoneIndicado: element.numeroIndicado,
          },
        });
      }
    });
  }
});

await $fetch("http://127.0.0.1:8000/api/userfranet/", {
  method: "GET",
})
  .then((res) => {
    if (res.length !== 0) {
      res.forEach((element) => {
        indicados.push({
          userfranetNumero: element.userfranet_numero,
          numeroIndicado: element.numeroIndicado,
          nomeIndicado: element.nomeIndicado,
          cadastradoEm: element.cadastradoEm,
          parentesco: element.parentesco,
        });
      });

      setIsLoading(false);
    } else {
      setIsLoading(false);
      error.value = "Não há indicados pendentes...";
    }
  })
  .catch((errors) => {
    setIsLoading(false);
    error.value = "Erro ao carregar a Lista...";
  });

async function handleSubmit() {
  setIsLoading(true);
  error.value = "";
  await $fetch("http://127.0.0.1:8000/api/userfranet/", {
    method: "GET",
  })
    .then((res) => {
      if (res.length !== 0) {
        indicados.length = 0;
        res.forEach((element) => {
          indicados.push({
            userfranetNumero: element.userfranet_numero,
            numeroIndicado: element.numeroIndicado,
            nomeIndicado: element.nomeIndicado,
            cadastradoEm: element.cadastradoEm,
            parentesco: element.parentesco,
          });
        });
        setIsLoading(false);
      } else {
        indicados.length = 0;
        setIsLoading(false);
        error.value = "Não há indicados pendentes...";
      }
    })
    .catch((errors) => {
      setIsLoading(false);
      error.value = "Erro ao carregar a Lista...";
    });
}
</script>

<template>
  <div class="flex flex-col h-full w-full items-center p-5 pt-10">
    <div class="flex flex-col w-full lg:w-1/2 justify-between mb-10">
      <h2
        class="font-bold max-[320px]:text-[10px] text-sm md:text-lg lg:text-xl"
      >
        Olá, {{ auth.getUser.name }}
      </h2>
      <div
        class="flex flex-row space-x-1 max-[320px]:text-[10px] text-sm md:text-lg lg:text-xl"
      >
        <h2 class="font-bold">E-mail:</h2>
        <h2>{{ auth.getUser.email }}</h2>
      </div>
    </div>

    <div class="flex flex-col items-center space-y-3 mb-10">
      <h1
        class="text-[#004c25] max-[320px]:text-sm text-xl md:text-2xl lg:text-3xl font-bold"
      >
        Lista de Indicados Pendentes
      </h1>
      <button
        @click.prevent="handleSubmit()"
        class="max-[320px]:w-1/2 w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
      >
        Atualizar
      </button>
    </div>

    <div class="flex h-full w-full flex-col space-y-6 items-center">
      <span v-if="error" class="text-red-500">{{ error.value }}</span>
      <Loading v-if="isLoading" message="Carregando dados..." />
      <div
        class="flex flex-col w-full h-full items-center"
        v-for="indicado in indicados"
        v-else
        :key="indicado.numeroIndicado"
      >
        <CardVerificarIndicacao :indicado="indicado" @update="handleSubmit()" />
      </div>
    </div>
  </div>
</template>

<style scoped></style>
