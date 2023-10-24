<template>
  <div class="flex flex-col w-full h-full -space-y-10">
    <img
      src="@/assets/images/indiqueganhe.png"
      alt="indiqueganhe"
      class="w-screen h-full"
    />
    <div
      class="flex flex-col bg-white w-full h-full p-12 md:pt-20 md:pb-20 lg:pt-28 lg:pb-28 rounded-t-3xl text-bold text-center font-bold items-center space-y-4 md:space-y-8 lg:space-y-12"
    >
      <h1 class="text-3xl md:text-5xl lg:text-7xl">
        Quer ganhar uma grana extra?
      </h1>
      <h3 class="lg:text-4xl md:text-2xl text-sm">INDIQUE UM AMIGO E GANHE!</h3>

      <div
        class="flex flex-col w-full space-y-2 md:space-y-4 lg:space-y-4 items-center"
        style="margin-bottom: 40px"
      >
        <span
          class="bg-[#004c25] w-1/2 md:w-1/3 lg:w-1/4 text-white font-bold text-md md:text-2xl lg:text-4xl p-1 lg:p-2 md:p-2 rounded-xl lg:rounded-2xl"
          ><NuxtLink to="/indicar">INDICAR</NuxtLink></span
        >
        <span
          class="bg-[#004c25] w-1/2 md:w-1/3 lg:w-1/4 text-white font-bold text-md md:text-2xl lg:text-4xl p-1 lg:p-2 md:p-2 rounded-xl lg:rounded-2xl"
          ><NuxtLink to="/regulamento">SAIBA MAIS</NuxtLink></span
        >
      </div>

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166149190053802045/usuarios.png?ex=65497010&is=6536fb10&hm=473f8ed93d88817aa5f9d8fd54fe79df3a8db4432f363ca2df3e90fde635ea29&"
        titulo="Indique para um amigo"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166149189542096926/lapis.png?ex=65497010&is=6536fb10&hm=a886ecde4d47f45404aec4fc1626120cee0adff275bd2e4119ee8d3dd1fb8112&"
        titulo="Seu amigo assina"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />

      <CardHome
        icone="https://cdn.discordapp.com/attachments/878707069979594813/1166149189823111310/mensagens.png?ex=65497010&is=6536fb10&hm=0411f1cd3f50411c6bdfb8a926af840fde7c9b115cc4a8f9792240c2648f9e1c&"
        titulo="Nós entramos em contato"
        texto="Compartilhe a grandeza! Ao indicar um amigo, você não apenas enriquece a jornada deles, mas também desbloqueia recompensas especiais para si mesmo. Juntos é sempre melhor"
      />
    </div>
  </div>
</template>

<script setup></script>

<style scoped></style>
