<template>
  <div>
    <BreadCrumb bc="Kontak Kami" />
    <MainBanner />
    <Contact />
    <hr class="w-50" />
    <Map />
    <hr class="w-50" />
  </div>
</template>

<script>
import BreadCrumb from "./BreadCrumb";
import MainBanner from "./Contact/MainBanner";
import Contact from "./Contact/Contact";
import Map from "./Contact/Map";

export default {
  name: "OurContact",
  components: {
    MainBanner,
    BreadCrumb,
    Contact,
    Map
  }
};
</script>

<style>
</style>