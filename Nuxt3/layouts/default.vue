<template>
  <div class="flex flex-col w-full h-full">
    <!-- <Icon name="ic:sharp-menu" color="white" size="48"/> -->
    <header class="bg-[#004c25] w-full h-auto">
      <nav
        class="container mx-auto px-6 py-4 grid grid-cols-3 lg:flex lg:justify-between lg:px-12 lg:py-8"
      >
        <!-- <DropDown Menu para Telas Mobile> -->
        <div class="lg:hidden">
          <Menu>
            <MenuButton class="flex items-cneter">
              <img
                src="https://cdn.discordapp.com/attachments/878707069979594813/1167602107587756052/menu-aberto.png?ex=65eb9bb3&is=65d926b3&hm=31e266e3d2172c578ec647c38c4e49415eb8f8ac2d25c1a08f5f1e06ce82e7bd&"
                alt="menu"
                class="max-[320px]:w-8 w-10 md:w-12"
              />
            </MenuButton>
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
                  ><NuxtLink
                    to="https://api.whatsapp.com/send?phone=5542933004300&text=Ol%C3%A1,%20estou%20no%20site,%20preciso%20de%20atendimento."
                    @click="close"
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
        <ul
          class="lg:flex row gap-6 text-white text-lg hidden justify-center items-center"
        >
          <li><NuxtLink to="/indicar">Indicar</NuxtLink></li>
          <li><NuxtLink to="/indicacoes">Minhas indicações</NuxtLink></li>
          <li><NuxtLink to="/regulamento">Regulamentação</NuxtLink></li>
          <li>
            <NuxtLink
              to="https://api.whatsapp.com/send?phone=5542933004300&text=Ol%C3%A1,%20estou%20no%20site,%20preciso%20de%20atendimento."
              >Suporte</NuxtLink
            >
          </li>
        </ul>
        <!-- </Links de Navegação> -->
      </nav>
    </header>

    <!-- <Conteúdo da página> -->
    <slot />
    <!-- </Conteúdo da página> -->

    <!-- <Footer> -->
    <footer class="bg-[#004c25] w-w-full h-auto px-6 py-4 lg:px-12 lg:py-8">
      <div
        class="container mx-auto text-white flex-col space-y-4 text-[8px] lg:text-lg md:text-sm"
      >
        <div class="flex justify-center">
          <img
            src="../assets/images/logo_franet.png"
            alt="logo_franet"
            class="lg:w-36 w-24 max-[320px]:w-20"
          />
        </div>
        <!-- <Colunas Grid para Contato> -->
        <div class="grid row grid-cols-3 max-[320px]:text-[6px]">
          <div class="flex-col text-center space-y-1">
            <h3>Contato</h3>
            <h2 class="font-bold">(43) 99640 - 9468</h2>
          </div>
          <div class="flex-col text-center space-y-1 lg:space-y-2">
            <h3>Conheça nossas redes</h3>
            <div
              class="flex row max-[320px]:space-x-2 space-x-5 justify-center lg:space-x-10 md:space-x-8"
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
    <!-- </Footer> -->
  </div>
</template>

<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
</script>

<style scoped></style>
