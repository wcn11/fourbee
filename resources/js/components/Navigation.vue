<template>
  <div>
    <div class="main-top py-1">
      <div class="container">
        <div class="nav-content">
          <!-- logo -->
          <h1>
            <router-link id="logo" class="logo" :to="{name: 'Home'}">
              <img src="../img/4b.png" alt class="img-fluid" />
              <span>Laundry</span>
              Fourbee
            </router-link>
          </h1>
          <!-- //logo -->
          <!-- nav -->
          <div class="nav_web-dealingsls">
            <nav>
              <label for="drop" class="toggle">Menu</label>
              <input type="checkbox" id="drop" />
              <ul class="menu">
                <li>
                  <!-- <a href="javascript:void(0)">Beranda</a> -->
                  <router-link :to="{name: 'Home'}">Beranda</router-link>
                </li>
                <li>
                  <!-- First Tier Drop Down -->
                  <label for="drop-3" class="toggle toogle-2">
                    Layanan
                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                  </label>
                  <a href="#pages">
                    Layanan
                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                  </a>
                  <input type="checkbox" id="drop-3" />
                  <ul>
                    <li>
                      <router-link :to="{name: 'LaundryPakaian'}" class="drop-text">Laundry Pakaian</router-link>
                      <!-- <a class="drop-text" href="#services">Laundry Pakaian</a> -->
                    </li>
                    <li>
                      <router-link
                        :to="{name: 'LaundryStroller'}"
                        class="drop-text"
                      >Laundry Stroller</router-link>
                      <!-- <a class="drop-text" href="javascript:void(0)">Laundry Stroller</a> -->
                    </li>
                    <li>
                      <router-link
                        :to="{name: 'LaundrySepatuTas'}"
                        class="drop-text"
                      >Laundry Sepatu & Tas</router-link>
                      <!-- <a class="drop-text" href="#blog">Laundry Sepatu & Tas</a> -->
                    </li>
                    <li>
                      <router-link :to="{name: 'LaundryCuciSofa'}" class="drop-text">Cuci Sofa</router-link>
                      <!-- <a class="drop-text" href="javascript:void(0)">Cuci Sofa</a> -->
                    </li>
                    <li>
                      <router-link :to="{name: 'LaundrySpringBed'}" class="drop-text">Cuci Springbed</router-link>
                      <!-- <a class="drop-text" href="javascript:void(0)">Cuci Springbed</a> -->
                    </li>
                    <!-- <li>
                      <a class="drop-text" href="javascript:void(0)">Laundry Kiloan</a>
                    </li>-->
                  </ul>
                </li>
                <li>
                  <router-link :to="{name: 'FourbeePoint'}">Fourbee Point</router-link>
                  <!-- <a href="javascript:void(0)">Fourbee Point</a> -->
                </li>
                <li>
                  <!-- First Tier Drop Down -->
                  <label for="drop-3" class="toggle toogle-2">
                    Price List
                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                  </label>
                  <a href="#pages">
                    Price List
                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                  </a>
                  <input type="checkbox" id="drop-3" />
                  <ul>
                    <li>
                      <a class="drop-text" href="#services">Laundry Pakaian</a>
                    </li>
                    <li>
                      <a class="drop-text" href="javascript:void(0)">Laundry Stroller</a>
                    </li>
                    <li>
                      <a class="drop-text" href="#blog">Laundry Sepatu & Tas</a>
                    </li>
                    <li>
                      <a class="drop-text" href="javascript:void(0)">Cuci Sofa</a>
                    </li>
                    <li>
                      <a class="drop-text" href="javascript:void(0)">Cuci Springbed</a>
                    </li>
                    <li>
                      <a class="drop-text" href="javascript:void(0)">Laundry Kiloan</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <!-- First Tier Drop Down -->
                  <label for="drop-3" class="toggle toogle-2">
                    Blogs
                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                  </label>
                  <router-link :to="{name: 'blogs'}">
                    <span class="fa fa-angle-down" aria-hidden="true">Blogs</span>
                  </router-link>
                  <!-- <a href="#pages">
                    Blogs
                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                  </a>-->
                  <input type="checkbox" id="drop-3" />
                  <ul>
                    <li>
                      <router-link :to="{name:'tags'}" class="drop-text">Tags</router-link>
                    </li>
                    <li>
                      <router-link :to="{name:'topics'}" class="drop-text">Topik</router-link>
                    </li>
                  </ul>
                </li>
                <li>
                  <router-link :to="{ name:'OurContact'}">Hubungi Kami</router-link>
                </li>
                <Navbar />
              </ul>
            </nav>
          </div>

          <!-- //nav -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from "../studio/components/Navbar";

export default {
  name: "Navigation",
  components: {
    Navbar
  }
};
</script>

<style></style>
