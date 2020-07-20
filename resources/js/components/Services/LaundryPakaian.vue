<template>
  <div>
    <BreadCrumb bc="Laundry Kiloan & Satuan" />
    <Banner />
    <hr class="w-50" />
    <SubBlog />
    <hr class="w-50" />
  </div>
</template>

<script>
import Banner from "../Services/Banner";
import SubBlog from "../Services/SubBlog";
import BreadCrumb from "..//BreadCrumb";

export default {
  name: "LaundryPakaian",
  components: {
    Banner,
    SubBlog,
    BreadCrumb
  }
};
</script>

<style>
</style>