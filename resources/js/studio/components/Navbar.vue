<template>
  <div v-if="user" class="btn-group">
    <!-- <slot name="actions"></slot> -->

    <div class="dropdown">
      <a
        href="#"
        class="nav-link p-0 user-settings"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <img
          :src="avatar"
          class="rounded-circle my-0 shadow-inner ml-3"
          style="width: 31px"
          :alt="user.name"
        />
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu">
        <h6 class="dropdown-header">
          {{ user.name }}
          <br />
          {{ user.email }}
        </h6>
        <div class="dropdown-divider"></div>
        <a :href="'/' + canvasPath + '/posts'" class="dropdown-item font-medium">Posts</a>
        <a :href="'/' + canvasPath + '/tags'" class="dropdown-item font-medium">Tags</a>
        <a :href="'/' + canvasPath + '/topics'" class="dropdown-item font-medium">Topics</a>
        <a :href="'/' + canvasPath + '/stats'" class="dropdown-item font-medium">Stats</a>
        <a :href="'/customers'" class="dropdown-item font-medium">Pelanggan</a>
        <!-- <a
          href="javascript:void(0)"
          onclick="modalCS = true"
          class="dropdown-item font-medium"
        >Customers</a>-->
        <div class="dropdown-divider"></div>
        <a :href="'/' + canvasPath + '/settings'" class="dropdown-item font-small">Settings</a>
        <a class="dropdown-item font-small" style="cursor: pointer" @click.prevent="logout">Sign out</a>
      </div>
    </div>

    <!-- <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">
              Daftar Customers
              <span class="text-info">Fourbee laundry</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col md-12">
                <div class="table-responsive">
                  <div>
                    <label for="csName">Cari pelanggan</label>
                    <input
                      type="text"
                      id="csName"
                      v-model="csName"
                      placeholder="masukkan nama pelanggann..."
                    />
                    <button type="button" class="btn btn-sm btn-info">Cari</button>
                  </div>
                  <div>
                    <button
                      type="button"
                      id="tambah-pelanggan"
                      class="btn btn-sm btn-info"
                      data-toggle="modal"
                      data-target=".modal-cs"
                      data-backdrop="static"
                      data-keyboard="false"
                    >Tambah pelanggan</button>
                  </div>
                  <table class="table table-borderless">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(cs, index) in resultsQuery" :key="cs.id" class="text-left">
                        <th scope="row" class="text-center">{{ page.from + index }}</th>
                        <td>{{ cs.nama }}</td>
                        <td>{{ cs.no_telp }}</td>
                        <td>{{ cs.alamat }}</td>
                        <td>Hapus</td>
                        <td>ubah</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-lg-12">
                <pagination
                  :data="page"
                  :size="small"
                  :align="center"
                  @pagination-change-page="fetchData"
                >
                  <span slot="prev-nav">&lt;&lt;</span>
                  <span slot="next-nav">&gt;&gt;</span>
                </pagination>
              </div>
            </div>
            <div class="modal modal-cs" tabindex="-1" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Tambah pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div>
                      <form class="form" v-on:submit.prevent="submitNewCs">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama pelanggan</label>
                          <input
                            type="text"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Nama pelanggan"
                            v-model="csNama"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">No Telepon</label>
                          <input
                            type="tel"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="No telp"
                            v-model="csNo"
                            required
                          />
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input
                            type="text"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Alamat"
                            v-model="csAlamat"
                            required
                          />
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                    <button type="button" class="btn btn-primary">Tambah</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              @click="resultsQuery()"
              class="btn btn-secondary btn-sm"
              data-dismiss="modal"
            >tutup</button>
          </div>
        </div>
      </div>
    </div>-->
  </div>
</template>

<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";

export default {
  name: "navbar",
  data() {
    return {
      user: Studio.user,
      avatar: Studio.avatar,
      canvasPath: Studio.canvasPath,
    };
  },
  methods: {
    logout() {
      let instance = axios.create();
      let token = document.head.querySelector('meta[name="csrf-token"]')
        .content;
      axios
        .post("/api/logout", {
          _token: token,
        })
        .then((response) => {
          window.location.href = "/";
        });
    },
  },
};
</script>

<style>
.font-small {
  font-size: xx-small !important;
}
.font-medium {
  font-size: 12px;
}
.pagination {
  padding-left: 1rem !important;
  border: none !important;
}
.pagination-page-nav {
  width: unset !important;
}
.page-item.active .page-link {
  background-color: #2fe6e6 !important;
  border-color: white;
}
.page-item.pagination-prev-nav {
  width: unset !important;
}
.page-item.pagination-next-nav {
  width: unset !important;
}

.page-link {
  color: #859395;
}
</style>
