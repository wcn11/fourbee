<template>
  <section class="ab-info-main py-5" id="contact">
    <div class="container py-xl-5 py-lg-3">
      <div class="title-section text-center mb-md-5 mb-4">
        <h3 class="w3ls-title mb-3">
          Hubungi
          <span>Fourbee Laundry</span>
        </h3>
        <p class="titile-para-text mx-auto">
          Jangkau kami dengan menghubungi beberapa kontak yang tertera.
          Jangan ragu untuk bertanya seputar laundry kepada kami.
          Dengan senang hati kami akan menjawab.
        </p>
      </div>
      <div class="row contact-agileinfo pt-lg-4">
        <!-- contact address -->
        <div class="col-md-5 address">
          <h3 class="footer-title mb-4 pb-lg-2">Alamat Kami</h3>
          <div class="row address-info-w3ls">
            <div class="col-3 address-left">
              <img src="../../img/maps_marker.png" alt class="img-fluid" />
            </div>
            <div class="col-9 address-right mt-2">
              <h5 class="address mb-2">Alamat</h5>
              <p>Jalan Salabenda Raya No.1, Atang Senjaya, Bogor, Jawa Barat</p>
            </div>
          </div>
          <div class="row address-info-w3ls my-2">
            <div class="col-3 address-left">
              <img src="../../img/email.png" alt class="img-fluid" />
            </div>
            <div class="col-9 address-right mt-2">
              <h5 class="address mb-2">Email</h5>
              <p>
                <a href="mailto:fourbeelaundry@gmail.com">fourbeelaundry@gmail.com</a>
              </p>
            </div>
          </div>
          <div class="row address-info-w3ls">
            <div class="col-3 address-left">
              <img src="../../img/phone_48px.png" alt class="img-fluid" />
            </div>
            <div class="col-9 address-right mt-2">
              <h5 class="address mb-2">Phone</h5>
              <p>+62 857-7044-4441</p>
            </div>
          </div>
          <div class="row address-info-w3ls">
            <div class="col-3 address-left">
              <img src="../../img/whatsapp_48px.png" alt class="img-fluid" />
            </div>
            <div class="col-9 address-right mt-2">
              <h5 class="address mb-2">WhatsApp</h5>
              <p>+62 857-7044-4441</p>
            </div>
          </div>
        </div>
        <!-- //contact address -->
        <!-- contact form -->
        <div class="col-lg-7 contact-right mt-lg-0 mt-5">
          <form action="#" method="post">
            <div class="row">
              <div class="col-lg-6 form-group pr-lg-2">
                <input type="text" class="form-control" name="Name" placeholder="Nama" required />
              </div>
              <div class="col-lg-6 form-group pl-lg-2">
                <input type="email" class="form-control" name="Email" placeholder="Email" required />
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="Phone" placeholder="Telepon" required />
            </div>
            <div class="form-group">
              <textarea name="Message" class="form-control" placeholder="Pesan" required></textarea>
            </div>
            <button type="submit" class="btn submit-contact-main ml-auto">Kirim pesan</button>
          </form>
        </div>
        <!-- contact form -->
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Contact"
};
</script>

<style>
</style>