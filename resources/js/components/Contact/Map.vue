<template>
  <section class="map">
    <div class="text-center p-3">
      <h3>Fourbeelaundry Center</h3>
    </div>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.84972786895!2d106.75825321477075!3d-6.540653095269204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c37b1525c80b%3A0x6522a84392fd7b22!2sFOURBEE%20LAUNDRY!5e0!3m2!1sen!2sid!4v1594651491002!5m2!1sen!2sid"
      width="600"
      height="450"
      frameborder="0"
      style="border:0;"
      allowfullscreen
      aria-hidden="false"
      tabindex="0"
    ></iframe>
    <div class="text-center p-3">
      <div>
        <h3>Cabang Fourbeelaundry</h3>
      </div>
      <div class="row pt-3">
        <div class="row mx-md-n5">
          <div v-for="(item, index) in 4" :key="index" class="col-lg-6 px-md-5">
            <div class="text-left p-2">
              <h4 style="color: #bd2a2a;">Fourbeelaundry Salabenda</h4>
              <hr class="w-50" />Jl. Raya Salabenda Rt 01/02 kelurahan dan kecamatan
              <br />Kabupaten Bogor
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15855.72792594113!2d106.75354349200437!3d-6.530275114004102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e51c16814da4ce3!2sFOURBEELAUNDRY%202!5e0!3m2!1sen!2sid!4v1594657995313!5m2!1sen!2sid"
              width="400"
              height="300"
              frameborder="0"
              style="border:0;"
              allowfullscreen
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Map"
};
</script>

<style>
</style>