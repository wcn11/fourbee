<template>
  <div>
    <BreadCrumb bc="Fourbee Point" />
    <Banner />
    <Blog />
    <hr class="w-50" />
  </div>
</template>

<script>
import Banner from "./Point/Banner";
import BreadCrumb from "./BreadCrumb";
import Blog from "./Point/Blog.vue";

export default {
  name: "FourbeePoint",
  components: {
    Banner,
    BreadCrumb,
    Blog
  }
};
</script>

<style>
</style>