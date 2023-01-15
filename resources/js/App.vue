<template>
    <div style="position: relative">
        <LoaderVue v-if="!isLoaded" />
        <OverlayPage v-if="isOverlay" />
        <notifications />
        <NavBar />
        <router-view style="z-index: 2" class="container-conent" />
        <FooterComponent />
    </div>
</template>

<script>
import LoaderVue from "./components/loader.vue";
import NavBar from "./components/NavBar.vue";
import FooterComponent from "./components/FooterComponent.vue";
import HomePage from "./views/HomePage.vue";
import HelloI18n from "./components/HelloI18n.vue";
import OverlayPage from "./components/Overlay.vue";
export default {
    name: "App",
    computed: {
        isLoaded() {
            return this.$store.getters.getLoaded;
        },
        isOverlay() {
            return this.$store.getters.getOverlay;
        },
    },
    components: {
        NavBar,
        FooterComponent,
        HelloI18n,
        HomePage,
        LoaderVue,
        OverlayPage,
    },
    data() {
        return {
           
        };
    },

    mounted() {
        this.$i18n.locale = lang;

        let lang = this.$i18n.locale;
        if (!lang) localStorage.setItem("lang", this.$i18n.locale);
        if (lang) {
            if (lang === "ar") {
                /*  import ("./css/style_rtl.css"); */
            } else {
                /* import("./css/index.css") */
            }
        }
    },
};
</script>

<style>
.container-conent {
    height: auto !important;
}
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
}
</style>