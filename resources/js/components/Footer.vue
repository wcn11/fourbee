<template>
  <footer class="py-5">
    <div class="container py-xl-4">
      <div class="row footer-top">
        <div class="col-lg-4 footer-grid_section_1its footer-text">
          <!-- logo -->
          <h2>
            <a class="logo text-wh" href="index.html">
              <img src="../img/4b_circle.png" alt class="img-fluid" />
              <span>Laundry</span>
              Fourbee
            </a>
          </h2>
          <!-- //logo -->
          <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">
            Jasa binatu untuk membantu mereka yang tidak sempat untuk mencuci
            pakaiannya sendiri dan beberapa macam barang seperti sofa,
            springbed, karpet dll.
          </p>
          <!-- social icons -->
          <ul class="top-right-info">
            <li>
              <p>Ikuti Kami:</p>
            </li>
            <li class="facebook-w3">
              <a href="#facebbok">
                <span class="fa fa-facebook-f"></span>
              </a>
            </li>
            <li class="twitter-w3">
              <a href="#twitter">
                <span class="fa fa-twitter"></span>
              </a>
            </li>
            <!-- <li class="google-w3">
                <a href="#google">
                  <span class="fa fa-google-plus"></span>
                </a>
              </li>
              <li class="dribble-w3">
                <a href="#dribble">
                  <span class="fa fa-dribbble"></span>
                </a>
            </li>-->
          </ul>
          <!-- //social icons -->
        </div>
        <div class="col-lg-4 footer-grid_section_1its my-lg-0 my-sm-4 my-4">
          <div class="footer-title">
            <h3>Hubungi Kami</h3>
          </div>
          <div class="footer-text mt-4">
            <p>
              Alamat : Jalan Salabenda Raya No.1, Atang Senjaya, Bogor, Jawa
              Barat
            </p>
            <p class="my-2">Telepon : +62 857-7044-4441</p>
            <p class="my-2">WhatsApp : +62 857-7044-4441</p>
            <p>
              Email :
              <a href="mailto:cs@fourbeelaundry.com">cs@fourbeelaundry.com</a>
            </p>
          </div>
          <!-- <div class="footer-title mt-4 pt-md-2">
              <h3>Payment Method</h3>
          </div>-->
          <!-- <ul class="list-unstyled payment-links mt-4">
              <li>
                <a href="javascript:void(0)"><img src="../img/pay2.png" alt="" /></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../img/pay5.png" alt="" /></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../img/pay1.png" alt="" /></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="../img/pay4.png" alt="" /></a>
              </li>
          </ul>-->
        </div>
        <div class="col-lg-4 footer-grid_section_1its">
          <div class="footer-title">
            <h3>Request Info</h3>
          </div>
          <div class="info-form-right mt-4 p-0">
            <form action="#" method="post">
              <div class="row">
                <div class="col-lg-6 form-group mb-2 pr-lg-1">
                  <input type="text" class="form-control" name="nama" placeholder="nama" required />
                </div>
                <div class="col-lg-6 form-group mb-2 pl-lg-1">
                  <input
                    type="text"
                    class="form-control"
                    name="telepon"
                    placeholder="Telepon"
                    required
                  />
                </div>
              </div>
              <div class="form-group mb-2">
                <input type="email" class="form-control" name="Email" placeholder="Email" required />
              </div>
              <div class="form-group mb-2">
                <textarea name="komentar" class="form-control" placeholder="Komentar" required></textarea>
              </div>
              <button type="submit" class="btn submit-contact ml-auto">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer"
};
</script>

<style>
</style>