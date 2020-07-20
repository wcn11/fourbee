<template>
  <section class="subscribe-main py-5 newsletter">
    <div class="container py-xl-5 py-3">
      <div class="row pb-lg-4 pt-lg-5">
        <div class="col-lg-6 col-md-9 text-center">
          <h3 class="w3ls-title mb-2">Dapatkan pemberitahuan</h3>
          <p class="mb-xl-5 mb-4">Langsung terkirim kedalam kotak masuk anda</p>
          <form action="#" method="post" class="d-flex newsletter-info">
            <input type="email" name="email" placeholder="Email anda..." required />
            <button type="submit">Dapatkan update!</button>
          </form>
        </div>
        <div class="col-lg-6 col-md-3"></div>
      </div>
      <img src="../img/laundry2.png" alt class="img-fluid sub-img" />
    </div>
  </section>
</template>

<script>
export default {
  name: "Newsletter"
};
</script>

<style>
</style>