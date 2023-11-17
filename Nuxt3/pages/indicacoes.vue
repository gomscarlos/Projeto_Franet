<script setup>
import { useDayjs } from "#dayjs";
import InputMask from "primevue/inputmask";

useHead({
  title: "Minhas indicações",
});

const dayjs = useDayjs();
dayjs().locale("pt-br").format();

//Variável para controlar formulário
const form = reactive({
  numeroTelefone: "",
});

//Variável para controlar caso haja erro no envio da requisição
const erro = reactive({
  errorUser: "",
});

const date = ref();

//constante array para armazenar a lista de Indicados
const users = reactive([]);

//Variável para renderizar a lista e esconder o formulário
const isOpen = ref(true);

//Variável para dar feedback ao usuário enquanto carrega a lista
const isLoading = ref(false);

function setIsLoading(value) {
  isLoading.value = value;
}

function setIsOpen(value) {
  isOpen.value = value;
}

async function handleSubmit() {
  setIsLoading(true);
  date.value = dayjs();
  await $fetch("http://127.0.0.1:8000/api/userfranet/" + form.numeroTelefone, {
    method: "GET",
  }).then((res) => {
    //Varificação automática se a promoção de cada usuário da lista está Expirado
    if (res.length !== 0) {
      res.forEach((element) => {
        const dataLimite = dayjs(element.vencimento).toDate();

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

    //Adicionando os elesmentos na variável User[]
    if (res.length !== 0) {
      res.forEach((element) => {
        users.push({
          numeroIndicado: element.numero,
          nomeIndicado: element.nomeIndicado,
          situacao: element.situacao,
          cadastradoEm: element.cadastradoEm,
        });
      });
      setIsLoading(false);
      setIsOpen(false);
      erro.errorUser = "";
    } else {
      erro.errorUser = "Usuário não encontrado... Tente Novamente!";
    }
  });
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
    <!-- <Formulário> -->
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
        <InputMask
          id="numero"
          v-model="form.numeroTelefone"
          mask="(99)99999-9999"
          placeholder="Digite seu número de telefone..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal max-[320px]:placeholder:text-[8px]" /><ErrorCad
          :errorName="erro.errorUser"
      /></label>

      <button
        type="submit"
        class="max-[320px]:w-1/2 w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
      >
        Enviar
      </button>
    </form>
    <!-- </ Formulário> -->

    <!-- <ListaDeIndicados> -->
    <div v-else class="flex h-full w-full flex-col space-y-6 items-center">
      <Loading v-if="isLoading" message="Carregando dados..." />
      <div
        class="flex flex-col w-full h-full items-center"
        v-for="user in users"
        :key="user.numero"
        v-else
      >
        <CardIndicacao :user="user" />
      </div>
    </div>
    <!-- </ListaDeIndicados> -->
  </div>
</template>

<style scoped></style>
