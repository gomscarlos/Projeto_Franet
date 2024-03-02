export const useAuthStore = defineStore('auth', {
    state: () => ({ 
      user: {},
    }),

    persist: {
      paths: ["user"],
    },

    getters: {
      getUser: (state) => state.user,
    },
    actions: {
        async login (formData) {

            try {
              const { data } = await $fetch("http://127.0.0.1:8000/api/login", {
                method: "POST",
                body: { ...formData },
              });

              this.commonSetter(data);
            } catch (error) {
              throw error;
            }
          },

          async register (formData) {

            try {
              const res = await $fetch("http://127.0.0.1:8000/api/register", {
                method: "POST",
                body: { ...formData },
              });

            } catch (error) {
              throw error;
            }
          },

          async logout () {
            const tokenStore = useTokenStore();

            try {
              const res = await $fetch("http://127.0.0.1:8000/api/logout", {
                method: "POST",
                headers: {
                  Accept: "application/json",
                  Authorization: `Bearer ${tokenStore.getToken}`,
                },
              });

              tokenStore.removeToken();
            } catch (error) {
              throw error;
            }
          },

          commonSetter(data) {
            const tokenStore = useTokenStore();
            tokenStore.setToken(data.token);
            this.user = data.user;

            return navigateTo("/adminHome")
          }
    },
  })