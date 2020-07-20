<template>
  <div id="app">
    <Header />
    <Navigation />
    <router-view></router-view>
    <Newsletter />
    <Footer />

    <div class="cpy-right text-center py-3">
      <p>
        © 2020 Fourbee Laundry. All rights reserved | Design by
        <a href="javascript:void(0)">@wCN.</a>
      </p>
    </div>
    <!-- move top icon -->

    <a href="javascript:void(0)" onclick="topFunction()" class="move-top text-center">
      <span class="fa fa-level-up" aria-hidden="true"></span>
    </a>

    <a
      href="https://api.whatsapp.com/send?phone=628570444441&text=Halo%20Fourbee%20Laundry.\n%20Saya%20ingin%20laundry"
      class="wa text-center"
    >
      <img src="./img/whatsapp_60px.png" />
    </a>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Navigation from "./components/Navigation";
import Newsletter from "./components/Newsletter";
import Footer from "./components/Footer";

export default {
  name: "App",
  components: {
    Header,
    Navigation,
    Newsletter,
    Footer
  },
  mounted() {
    if (this.$route.name == "Login") {
      let el = document.querySelector(".newsletter").remove();
    }
  }
};
</script>

<style>
@import "https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css";
</style>
