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
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166149190053802045/usuarios.png?ex=65ef8d10&is=65dd1810&hm=98effb957e6a6f14a239d16a08603cbaa368bc799dd43c18efe134c9cb447f36&"
        titulo="Indique para um amigo"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166518952285982760/lapis.png?ex=65e7aaef&is=65d535ef&hm=e3ad2a81afafb82ee701618972122d2178eaeae752efce47f7d3b6273b8a72eb&"
        titulo="Seu amigo assina"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166518984661803029/mensagem.png?ex=65e7aaf6&is=65d535f6&hm=27ee18f4865e412f79abcd83c32235f4b4cb28e3d7abeb7fa693eec2e17e67c3&"
        titulo="Nós entramos em contato"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />
    </div>
  </div>
</template>

<script setup>
useHead({
  title: "Indique e Ganhe",
});
</script>

<style scoped></style>
