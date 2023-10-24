<template>
  <div class="flex flex-col w-full h-full -space-y-5">
    <img
      src="@/assets/images/indiqueganhe.png"
      alt="indiqueganhe"
      class="w-screen h-full"
    />
    <div
      class="flex flex-col bg-white w-full h-full max-[320px]:p-8 p-12 md:pt-20 md:pb-20 lg:pt-28 lg:pb-28 rounded-t-3xl text-bold text-center font-bold items-center max-[320px]:space-y-2 space-y-4 md:space-y-8 lg:space-y-12"
    >
      <h1 class="max-[320px]:text-xl text-3xl md:text-5xl lg:text-7xl">
        Quer ganhar uma grana extra?
      </h1>
      <h3 class="lg:text-4xl md:text-2xl text-sm max-[320px]:text-[10px]">
        INDIQUE UM AMIGO E GANHE!
      </h3>

      <div
        class="flex flex-col w-full space-y-2 md:space-y-4 lg:space-y-4 items-center"
        style="margin-bottom: 40px"
      >
        <span
          class="bg-[#004c25] w-1/2 md:w-1/3 lg:w-1/4 text-white font-bold max-[320px]:text-xs text-md md:text-2xl lg:text-4xl p-1 lg:p-2 md:p-2 max-[320px]:rounded-lg rounded-xl lg:rounded-2xl"
          ><NuxtLink to="/indicar">INDICAR</NuxtLink></span
        >
        <span
          class="bg-[#004c25] w-1/2 md:w-1/3 lg:w-1/4 text-white font-bold max-[320px]:text-xs text-md md:text-2xl lg:text-4xl p-1 lg:p-2 md:p-2 max-[320px]:rounded-lg rounded-xl lg:rounded-2xl"
          ><NuxtLink to="/regulamento">SAIBA MAIS</NuxtLink></span
        >
      </div>

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166149190053802045/usuarios.png?ex=65497010&is=6536fb10&hm=473f8ed93d88817aa5f9d8fd54fe79df3a8db4432f363ca2df3e90fde635ea29&"
        titulo="Indique para um amigo"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166518952285982760/lapis.png?ex=654ac86f&is=6538536f&hm=c5d01e00d1355a4ff9c4c769f1a9cb77d8fb6e3f175c4a4d864a34215d24725a&"
        titulo="Seu amigo assina"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166518984661803029/mensagem.png?ex=654ac876&is=65385376&hm=1c22c51f82cd316e0bb4464f376da6ab8adb4aa421371729990c3b841aa88bde&"
        titulo="Nós entramos em contato"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />
    </div>
  </div>
</template>

<script setup></script>

<style scoped></style>
