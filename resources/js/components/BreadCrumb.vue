<template>
  <div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
      <li class="breadcrumb-item">
        <router-link :to="{name: 'Home'}">Home</router-link>
        <!-- <a href="/" onclick="redirect">Home</a> -->
      </li>
      <li class="breadcrumb-item active" aria-current="page">{{ this.breadcrumb }}</li>
    </ol>
  </div>
</template>

<script>
export default {
  name: "BreadCrumb",
  props: ["bc"],
  data() {
    return {
      breadcrumb: this.bc
    };
  }
};
</script>

<style>
</style>