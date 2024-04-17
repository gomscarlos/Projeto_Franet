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
    '@pinia/nuxt',
    '@pinia-plugin-persistedstate/nuxt',
  ],
  imports: {
    dirs: ['./stores'],
  },
  pinia: {
    storesDirs: ['./stores/**', './custom-folder/stores/**'],
  },
  primevue: {
    usePrimeVue: true,
  },
  app: {
    head: {
      link: [
        {rel: "icon", href:"logofranet.svg", type: "image/x-icon"}
      ]
    },
  },
});
