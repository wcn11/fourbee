<template>
  <div id="app">
    <Banner />
    <About />
    <Specials />
    <TwoGrids />
    <Services />
    <Blogs />
    <!-- move top icon -->

    <a href="javascript:void(0)" onclick="topFunction()" class="move-top text-center">
      <span class="fa fa-level-up" aria-hidden="true"></span>
    </a>

    <a
      href="https://api.whatsapp.com/send?phone=628570444441&text=Halo%20Fourbee%20Laundry.\n%20Saya%20ingin%20laundry"
      class="wa text-center"
    >
      <img src="../img/whatsapp_60px.png" />
    </a>
  </div>
</template>

<script>
import Banner from "./Home/Banner";
import About from "./Home/About";
import Specials from "./Home/Specials";
import TwoGrids from "./Home/TwoGrids";
import Services from "./Home/Services";
import Blogs from "./Home/Blogs";

export default {
  name: "App",
  components: {
    Banner,
    About,
    Specials,
    TwoGrids,
    Services,
    Blogs
  }
};
</script>

<style></style>
