<script setup>
const token = useTokenStore();
const auth = useAuthStore();
</script>

<template>
  <div class="flex flex-col w-full h-full">
    <header class="bg-[#004c25] w-full h-auto">
      <nav
        class="container mx-auto px-6 py-4 flex justify-between lg:px-12 lg:py-8"
      >
        <div class="flex justify-center items-center">
          <NuxtLink to="/adminHome">
            <img
              src="../assets/images/logo_franet.png"
              alt="logo_franet"
              class="m-auto w-20 lg:w-24 max-[320px]:w-12"
            />
          </NuxtLink>
        </div>
        <ul
          class="row gap-6 text-white lg:text-lg md:text-lg text-xs max-[320px]:text-[8px] flex justify-center items-center"
        >
          <li v-if="!token.getStatus">
            <NuxtLink to="/auth/login">Entrar</NuxtLink>
          </li>
          <li v-if="token.getStatus">
            <NuxtLink to="/auth/register">Registrar novo usuário</NuxtLink>
          </li>
          <button @click.prevent="auth.logout()" v-if="token.getStatus">
            Sair
          </button>
        </ul>
      </nav>
    </header>

    <slot />
  </div>
</template>

<style scoped></style>
