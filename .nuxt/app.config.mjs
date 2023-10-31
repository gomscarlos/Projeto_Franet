
import { updateAppConfig } from '#app'
import { defuFn } from 'D:/Meus Documentos/Área de Trabalho/Estágio/Projeto Estágio/Projeto/Projeto_Franet/node_modules/defu/dist/defu.mjs'

const inlineConfig = {
  "nuxt": {}
}

// Vite - webpack is handled directly in #app/config
if (import.meta.hot) {
  import.meta.hot.accept((newModule) => {
    updateAppConfig(newModule.default)
  })
}



export default /* #__PURE__ */ defuFn(inlineConfig)
