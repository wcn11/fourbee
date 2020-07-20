<template>
  <div>
    <Banner />
    <hr class="w-50" />
    <SubBlog />
    <hr class="w-50" />
  </div>
</template>

<script>
// import LaundryPakaian from "./components/Services/LaundryPakaian";
import Banner from "./Services/Banner";
import SubBlog from "./Services/SubBlog";

export default {
  name: "Services",
  components: {
    // LaundryPakaian,
    Banner,
    SubBlog
  }
};
</script>

<style>
</style>