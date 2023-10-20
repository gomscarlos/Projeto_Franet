<template>
  <div>
    <header class="bg-[#004c25] w-full h-auto">
      <nav
        class="container mx-auto px-6 py-4 grid grid-cols-3 lg:flex lg:justify-between lg:px-12 lg:py-8"
      >
        <!-- <DropDown Menu para Telas Mobile> -->
        <div class="lg:hidden">
          <Menu>
            <MenuButton
              ><Icon name="ic:sharp-menu" color="white" size="48"
            /></MenuButton>
            <MenuItems
              class="flex flex-col absolute bg-white gap-4 text-[#004c25] md:text-sm text-xs p-4 rounded-md border border-gray-300"
            >
              <MenuItem v-slot="{ close }">
                <span>
                  <NuxtLink to="/indicar" @click="close">Indicar</NuxtLink>
                </span>
              </MenuItem>

              <MenuItem v-slot="{ close }">
                <span
                  ><NuxtLink to="/indicacoes" @click="close"
                    >Minhas indicações</NuxtLink
                  ></span
                >
              </MenuItem>

              <MenuItem v-slot="{ close }">
                <span
                  ><NuxtLink to="/regulamento" @click="close"
                    >Regulamentação</NuxtLink
                  ></span
                >
              </MenuItem>

              <MenuItem v-slot="{ close }">
                <span
                  ><NuxtLink to="/suporte" @click="close"
                    >Suporte</NuxtLink
                  ></span
                >
              </MenuItem>
            </MenuItems>
          </Menu>
        </div>
        <!-- </DropDown Menu para Telas Mobile> -->

        <!-- <Icone central Franet> -->
        <div class="flex justify-center items-center">
          <NuxtLink to="/"
            ><img
              src="../assets/images/logo_franet.png"
              alt="logo_franet"
              class="m-auto w-20 lg:w-24"
          /></NuxtLink>
        </div>
        <!-- </Icone central Franet> -->

        <!-- <Links de Navegação> -->
        <ul class="lg:flex row gap-4 text-white text-lg hidden">
          <li><NuxtLink to="/indicar">Indicar</NuxtLink></li>
          <li><NuxtLink to="/indicacoes">Minhas indicações</NuxtLink></li>
          <li><NuxtLink to="/regulamento">Regulamentação</NuxtLink></li>
          <li><NuxtLink to="/suporte">Suporte</NuxtLink></li>
        </ul>
        <!-- </Links de Navegação> -->
      </nav>
    </header>

    <!-- <Conteúdo da página> -->
    <div class="container p-10 mx-auto">
      <slot />
    </div>
    <!-- </Conteúdo da página> -->

    <footer class="bg-[#004c25] w-w-full h-auto px-6 py-4 lg:px-12 lg:py-8">
      <div
        class="container mx-auto text-white flex-col space-y-4 text-[8px] lg:text-lg md:text-sm"
      >
        <div class="flex justify-center">
          <img
            src="../assets/images/logo_franet.png"
            alt="logo_franet"
            class="lg:w-36 w-24"
          />
        </div>
        <!-- <Colunas Grid para Contato> -->
        <div class="grid row grid-cols-3">
          <div class="flex-col text-center space-y-1">
            <h3>Contato</h3>
            <h2 class="font-bold">(43) 99640 - 9468</h2>
          </div>
          <div class="flex-col text-center space-y-1 lg:space-y-2">
            <h3>Conheça nossas redes</h3>
            <div
              class="flex row space-x-5 justify-center lg:space-x-10 md:space-x-8"
            >
              <NuxtLink to="https://www.facebook.com/franettelecom">
                <img
                  src="../assets/images/facebook.png"
                  alt="logo_facebook"
                  class="text-xs w-3 lg:w-6 md:w-5"
                />
              </NuxtLink>
              <NuxtLink to="https://www.instagram.com/franettelecom/">
                <img
                  src="../assets/images/instagram.png"
                  alt="logo_instagram"
                  class="text-xs w-3 lg:w-6 md:w-5"
                />
              </NuxtLink>
              <NuxtLink to="https://www.youtube.com/@franettelecom8770">
                <img
                  src="../assets/images/youtube.png"
                  alt="logo_youtube"
                  class="text-xs w-3 lg:w-6 md:w-5"
                />
              </NuxtLink>
            </div>
          </div>
          <div class="flex-col text-center space-y-1">
            <h3>Fale conosco</h3>
            <h2 class="font-bold">franet@contato.com</h2>
          </div>
        </div>
        <!-- </Colunas Grid para Contato> -->
      </div>
    </footer>
  </div>
</template>

<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
</script>

<style scoped></style>
