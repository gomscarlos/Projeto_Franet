<script setup>
import { useAuthStore } from "~/stores/auth";

definePageMeta({
  layout: "authetication",
});

const auth = useAuthStore();

const form = reactive({
  email: "admin.system@gmail.com",
  password: "passwordfranet",
});

const errorList = reactive({
  error: "",
});

const handleSubmit = async () => {
  try {
    await auth.login(form);
  } catch (error) {
    if (error.data.errors.email) {
      errorList.error = error.data.errors.email[0];
    }

    if (error.data.errors.password) {
      errorList.error = error.data.errors.password[0];
    }
  }
};
</script>

<template>
  <div
    class="flex h-full w-full justify-center p-5 pt-12 pb-12 md:pt-20 lg:pt-20 md:pb-20 lg:pb-20"
  >
    <form @submit.prevent="handleSubmit" class="md:w-1/2 lg:w-1/3">
      <div
        class="bg-[#ebebeb] flex w-full md:w-auto lg:w-auto flex-col items-center max-[320px]:p-6 p-8 md:p-12 lg:p-12 rounded-3xl"
      >
        <img
          src="../assets/images/logo_franet_colorido.png"
          alt="logo_franet"
          class="m-auto w-20 lg:w-24 xl:w-32 mb-5"
        />
        <div class="flex flex-col w-full mb-5">
          <label
            for="email"
            class="max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
            >E-mail</label
          >
          <input
            type="email"
            id="email"
            v-model="form.email"
            placeholder="Email"
            class="flex p-2 md:p-3 lg:p-3 rounded-xl border text-sm font-normal"
            required
          />
        </div>

        <div class="flex flex-col w-full mb-10">
          <label
            for="password"
            class="flex max-[320px]:text-xs text-sm md:text-xl lg:text-xl text-[#3e3e3e] font-bold"
            >Senha</label
          >
          <input
            type="password"
            id="password"
            v-model="form.password"
            placeholder="Digite sua senha"
            class="flex p-2 md:p-3 lg:p-3 rounded-xl border text-sm font-normal"
            required
          />
          <ErrorCad :errorName="errorList.error" />
        </div>

        <button
          type="submit"
          class="w-1/2 xl:w-1/3 p-2 bg-white font-bold text-sm md:text-xl lg:text-xl text-[#3e3e3e] rounded-xl border duration-500 hover:text-[#108101] hover:border-[#108101]"
        >
          Entrar
        </button>
      </div>
    </form>
  </div>
</template>

<style scoped></style>
