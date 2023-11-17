// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    "@nuxtjs/tailwindcss",
    [
      "@nuxtjs/google-fonts",
      {
        families: {
          Poppins: [400, 700],
        },
      },
    ],
    "nuxt-primevue",
    "dayjs-nuxt",
    "@element-plus/nuxt",
  ],
  primevue: {
    usePrimeVue: true,
  },
});
