<template>
  <div
    class="flex w-full h-full justify-center pt-10 pb-10 p-5 md:pt-16 md:pb-16 lg:pt-16 lg:pb-16"
  >
    <div
      class="bg-[#ebebeb] flex w-full md:w-auto lg:w-auto h-full flex-col items-center max-[320px]:p-6 p-8 md:p-12 lg:p-12 rounded-3xl"
    >
      <h1
        class="max-[320px]:text-xs text-lg md:text-3xl lg:text-3xl text-[#3e3e3e] font-bold max-[320px]:mb-2 mb-4"
      >
        Link de compartilhamento
      </h1>
      <input
        type="text"
        value="https://whatsa.me/5543996409468"
        readonly
        class="flex w-full max-[320px]:p-2 p-4 rounded-lg md:rounded-xl lg:rounded-xl max-[320px]:text-[8px] text-xs md:lg:text-lg lg:text-lg border text-gray-400 font-normal text-center"
      />
      <div
        class="flex pl-2 pr-2 w-full justify-center max-[320px]:space-x-4 space-x-8 max-[320px]:mt-6 max-[320px]:mb-12 mt-8 mb-16 md:mt-10 lg:mt-10 md:mb-20 lg:mb-20"
      >
        <button
          class="max-[320px]:w-1/2 w-1/2 max-[320px]:p-1 p-2 bg-transparent font-bold max-[320px]:text-[8px] text-xs md:text-lg lg:text-md text-[#3e3e3e] rounded-md md:rounded-xl lg:rounded-lg border border-[#908686] duration-500 hover:text-[#108101] hover:border-[#108101]"
        >
          Copiar
        </button>
        <button
          class="max-[320px]:w-1/2 w-1/2 max-[320px]:p-1 p-2 bg-transparent font-bold text-xs max-[320px]:text-[8px] md:text-lg lg:text-md text-[#3e3e3e] rounded-md md:rounded-xl lg:rounded-lg border border-[#908686] duration-500 hover:text-[#108101] hover:border-[#108101]"
        >
          Compartilhar
        </button>
      </div>
      <span
        class="text-[#3e3e3e] font-semibold max-[320px]:text-xs text-sm md:text-lg lg:text-lg"
        ><NuxtLink to="/indicacoes">Ver minhas indicações</NuxtLink></span
      >
    </div>
  </div>
</template>

<script setup></script>

<style scoped></style>
