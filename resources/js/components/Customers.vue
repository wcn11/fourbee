<template>
  <div class="container">
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
              @click="bukaModal($event)"
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
                <button type="button" id="hapus-pelanggan" class="btn btn-sm btn-danger">hapus</button>
                <button
                  type="button"
                  id="edit-pelanggan"
                  class="btn btn-sm btn-warning"
                  data-toggle="modal"
                  data-target=".modal-cs"
                  data-backdrop="static"
                  data-keyboard="false"
                  @click="bukaModal($event, cs.id)"
                >edit</button>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-12">
        <pagination :data="page" :size="small" :align="center" @pagination-change-page="fetchData">
          <span slot="prev-nav">&lt;&lt;</span>
          <span slot="next-nav">&gt;&gt;</span>
        </pagination>
      </div>
    </div>

    <!--============== -->

    <div class="modal modal-cs" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{ modalJudul }}</h5>
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
</template>

<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";

export default {
  name: "Customers",
  data() {
    return {
      customers: [],
      csName: "",
      page: [],
      csNama: "",
      csNo: "",
      csAlamat: "",
      modalJudul: "",
      idCust: "",
    };
  },
  components: {
    pagination,
  },
  methods: {
    bukaModal(event, idCustomer = 0) {
      let id = event.target.id;
      if (id === "tambah-pelanggan") {
        this.modalJudul = "Tambah pelanggan";
        this.csNama = "";
        this.csNo = "";
        this.csAlamat = "";
      } else {
        this.modalJudul = "Ubah data pelanggan";
        let cs = this.customers.filter((cust) => cust.id === idCustomer);
        this.idCust = idCustomer;
        this.csNama = cs[0].nama;
        this.csNo = cs[0].no_telp;
        this.csAlamat = cs[0].alamat;
      }
    },
    submitNewCs() {
      let token = document.head.querySelector('meta[name="csrf-token"]')
        .content;
      let typeOfRequest = "";
      if (this.modalJudul === "tambah-pelanggan") {
        axios
          .post("/api/customers", {
            _token: token,
            id: this.idCust,
            nama: this.csNama,
            no_telp: this.csNo,
            alamat: this.csAlamat,
          })
          .then((response) => {
            let res = response.data;
            if (res.success) {
              this.customers.unshift(res.data);
            }
          });
      } else {
        axios
          .put("/api/customers", {
            _token: token,
            id: this.idCust,
            nama: this.csNama,
            no_telp: this.csNo,
            alamat: this.csAlamat,
          })
          .then((response) => {
            let res = response.data;
            if (res.success) {
              this.fetchData();
            }
          });
      }
    },
    fetchData(page) {
      if (typeof page === "undefined") {
        page = 1;
      }

      let instance = axios.create();
      let token = document.head.querySelector('meta[name="csrf-token"]')
        .content;
      axios
        .get(`/api/customers?page=${page}`, {
          _token: token,
        })
        .then((response) => {
          this.page = response.data;
          this.customers = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    pelangganBaru() {
      let response = axios.post("api/customers", {});
    },
  },
  computed: {
    resultsQuery() {
      if (this.csName) {
        return this.customers.filter((tes) => {
          return this.csName
            .toLowerCase()
            .split(" ")
            .every((v) => tes.nama.toLowerCase().includes(v));
        });
      } else {
        return this.customers;
      }
    },
  },

  created() {
    this.fetchData();
  },
};
</script>

<style>
</style>