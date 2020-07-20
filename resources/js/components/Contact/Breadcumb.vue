<template>
  <div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
      <li class="breadcrumb-item">
        <a href="/" onclick="redirect">Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
    </ol>
  </div>
</template>

<script>
export default {
  name: "Breadcumb",
  method: {
    redirect: function() {
      this.$routes.push("/");
    }
  }
};
</script>

<style>
</style>