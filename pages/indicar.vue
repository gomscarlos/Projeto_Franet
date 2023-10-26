<template>
  <div
    class="flex h-full w-full justify-center p-5 pt-12 pb-12 md:pt-20 lg:pt-20 md:pb-20 lg:pb-20"
  >
    <form
      action=""
      class="bg-[#ebebeb] flex w-full md:w-auto lg:w-auto flex-col items-center p-8 md:p-12 lg:p-12 space-y-4 rounded-3xl"
      v-show="true"
    >
      <h1 class="text-2xl md:text-5xl lg:text-5xl text-[#3e3e3e] font-bold">
        Preencha os dados
      </h1>
      <label
        for="nome"
        class="flex flex-col w-full text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Nome<input
          type="text"
          id="nome"
          placeholder="Seu nome..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="numero"
        class="flex flex-col w-full text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        style="margin-bottom: 36px"
        >Número<input
          type="text"
          id="numero"
          placeholder="Seu número..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="indicado"
        class="flex flex-col w-full text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Nome do indicado
        <input
          type="text"
          id="indicado"
          placeholder="Nome do indicado..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="numIndicado"
        class="flex flex-col w-full text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        >Número do indicado
        <input
          type="text"
          id="numIndicado"
          placeholder="Número do indicado..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <label
        for="parentesco"
        class="flex flex-col w-full text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
        style="margin-bottom: 16px"
        >Grau parentesco
        <input
          type="text"
          id="parentesco"
          placeholder="Ex: Amigo, Primo..."
          class="flex p-2 md:p-3 lg:p-3 rounded-xl border font-normal"
      /></label>

      <button
        type="submit"
        @click="setIsOpen(false)"
        class="w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
      >
        Enviar
      </button>
    </form>
    <div
      class="bg-[#ebebeb] flex w-full md:w-auto lg:w-auto flex-col p-8 md:p-12 lg:p-12 text-center justify-center items-center space-y-4 md:space-y-8 lg:space-y-8 rounded-3xl"
      v-show="false"
    >
      <h2 class="text-[#3e3e3e] font-black text-xl md:text-2xl lg:text-2xl">
        Sua indicação foi enviada com sucesso!
      </h2>
      <img
        src="https://cdn.discordapp.com/attachments/878707069979594813/1167217269747748874/enviar.png?ex=654d52ca&is=653addca&hm=e61d57f069d853bc2cc4f685b6acb8a2c3863c7778b06b048bee24f6bccd3594&"
        alt="logo_mensagem"
        class="w-24 md:w-32 lg:w-32"
      />
      <span
        class="text-[#3e3e3e] font-semibold text-sm md:text-lg lg:text-lg"
        style="margin-top: 48px"
        ><NuxtLink to="/indicacoes">Ver minhas indicações</NuxtLink></span
      >
    </div>
  </div>
</template>

<script setup></script>

<style scoped></style>
