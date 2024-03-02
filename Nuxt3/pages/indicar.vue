<script setup>
import { useDayjs } from "#dayjs";
import InputMask from "primevue/inputmask";
import { ElLoading } from "element-plus";

useHead({
  title: "Indicar",
});

const dayjs = useDayjs();
dayjs().locale("pt-br").format();

//formulário para controlar os campos do cadastro
const form = reactive({
  nome: "",
  numero: "",
  nomeIndicado: "",
  numeroIndicado: "",
  parentesco: "",
  situacao: "",
  cadastradoEm: "",
});

//Lista de erro para apresentar caso algum campo não
//atenda aos requisitos
const errorList = reactive({
  errorNome: "",
  errorNumero: "",
  errorNomeIndicado: "",
  errorNumeroIndicado: "",
  errorParentesco: "",
  errorGeral: "",
});

//funções para limpar os campos do formulário e errors
function resetForm() {
  form.nome = "";
  form.numero = "";
  form.nomeIndicado = "";
  form.numeroIndicado = "";
  form.parentesco = "";
  form.situacao = "";
  form.cadastradoEm = "";
}
function resetErrors() {
  (errorList.errorNome = ""),
    (errorList.errorNumero = ""),
    (errorList.errorNomeIndicado = ""),
    (errorList.errorNumeroIndicado = ""),
    (errorList.errorParentesco = ""),
    (errorList.errorGeral = "");
}

//variával para controlar o modal
const isOpen = ref(true);

//função para após enviar o formulário
//abrir um modal de confirmação
function setIsOpen(value) {
  isOpen.value = value;
}

//constante SVG para Spinner de carregamento de dados
const svg = `
        <path class="path" d="
          M 30 15
          L 28 17
          M 25.61 25.61
          A 15 15, 0, 0, 1, 15 30
          A 15 15, 0, 1, 1, 27.99 7.5
          L 15 15
        " style="stroke-width: 4px; fill: rgba(0, 0, 0, 0); stroke: rgba(0, 76, 37);"/>
      `;

async function handleSubmit() {
  //Variável para controlar dar feedback do usuário enquanto envia os dados
  const loading = ElLoading.service({
    lock: true,
    background: "rgba(0, 0, 0, 0.7)",
    spinner: svg,
    svgViewBox: "-10, -10, 50, 50",
  });

  resetErrors();
  //pegando a data de cadastro e vencimento da promoção

  //e também colocando aos campos de forma automática
  form.situacao = "Pendente";
  form.cadastradoEm = dayjs().format("DD/MM/YYYY").toString();

  await $fetch("http://127.0.0.1:8000/api/userfranet", {
    method: "POST",
    body: { ...form },
  })
    .then(() => {
      //colocando false para fechar o formulário e abrir o modal
      setIsOpen(false);
      loading.close();
      resetForm();
    })
    .catch((error) => {
      loading.close();
      //Condições para colocar o erro apenas nos campos que estão inválidos
      //e também uma para caso haja um erro genérico
      if (error.data.messageError) {
        errorList.errorGeral = error.data.messageError;
      }

      if (error.data.errors.nome) {
        errorList.errorNome = "Nome inválido";
      }
      if (error.data.errors.numero) {
        errorList.errorNumero = "Número inválido";
      }
      if (error.data.errors.nomeIndicado) {
        errorList.errorNomeIndicado = "Nome do indicado inválido";
      }
      if (error.data.errors.numeroIndicado) {
        errorList.errorNumeroIndicado = "Número do indicado inválido";
      }
      if (error.data.errors.parentesco) {
        errorList.errorParentesco = "Parentesco inválido";
      }
    });
}
</script>

<template>
  <div
    class="flex h-full w-full justify-center p-5 pt-12 pb-12 md:pt-20 lg:pt-20 md:pb-20 lg:pb-20"
  >
    <!-- <Formulário> -->
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

      <ErrorCad :errorName="errorList.errorGeral" />

      <label
        for="nome"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Nome<input
          type="text"
          id="nome"
          v-model="form.nome"
          placeholder="Seu nome..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
        />
        <ErrorCad :errorName="errorList.errorNome" />
      </label>

      <label
        for="numero"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        style="margin-bottom: 36px"
        >Número<InputMask
          id="numero"
          v-model="form.numero"
          mask="(99)99999-9999"
          placeholder="Seu número..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal" />
        <ErrorCad :errorName="errorList.errorNumero"
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
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal" /><ErrorCad
          :errorName="errorList.errorNomeIndicado"
      /></label>

      <label
        for="numIndicado"
        class="flex flex-col w-full max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Número do indicado
        <InputMask
          id="numIndicado"
          v-model="form.numeroIndicado"
          mask="(99)99999-9999"
          placeholder="Número do indicado..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal" /><ErrorCad
          :errorName="errorList.errorNumeroIndicado"
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
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal" />
        <ErrorCad :errorName="errorList.errorParentesco"
      /></label>

      <button
        type="submit"
        class="max-[320px]:w-1/2 w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
      >
        Enviar
      </button>
    </form>

    <!-- </ Formulário> -->

    <!-- <DialogDeConfirmação> -->
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
        src="https://cdn.discordapp.com/attachments/878707069979594813/1167602361162805258/enviar_1.png?ex=65eb9bef&is=65d926ef&hm=12a06b627610c3f5e7eb6dae1825fbf7744dd68b65bbd1f41bf59deadbdf871a&"
        alt="logo_mensagem"
        class="w-24 md:w-32 lg:w-32 max-[320px]:mb-12 mb-16 md:mb-20 lg:mb-16 max-[320px]:mt-6 mt-8 md:mt-10 lg:mt-10"
      />
      <span
        class="text-[#3e3e3e] font-semibold max-[320px]:text-xs text-sm md:text-lg lg:text-lg"
        ><NuxtLink to="/indicacoes">Ver minhas indicações</NuxtLink></span
      >
    </div>
    <!-- </ DialogDeConfirmação> -->
  </div>
</template>

<style scoped></style>
