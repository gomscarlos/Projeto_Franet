export default defineNuxtRouteMiddleware(() => {
    const tokenStore = useTokenStore();

    if(tokenStore.getStatus){
        return navigateTo("/adminHome");
    }
});