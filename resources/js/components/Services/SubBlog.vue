<template>
  <div class="container">
    <div class="about-bottom" v-for="(item, index) in ['Kiloan', 'Satuan']" :key="index">
      <div class="row no-gutters">
        <div class="col-lg-5 col-md-6 about"></div>
        <div class="col-lg-7 col-md-6 about-right-w3 text-right py-md-5 about-right">
          <div class="right-space py-xl-5 py-lg-3">
            <div class="title-section mb-4">
              <p class="w3ls-title-sub">Cuci {{ item }}</p>
              <h3 class="w3ls-title">
                Jasa Laundry
                <span>{{ item }}</span>
              </h3>
            </div>
            <p
              class="about-text"
            >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi a sint dolores et eligendi, rerum alias accusantium dignissimos. Et modi dicta porro? Aperiam ipsum totam incidunt amet praesentium, unde sint.</p>
            <a href="javascript:void(0)" class="button-w3ls mt-5">
              Price List
              <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SubBlog"
};
</script>

<style>
</style>