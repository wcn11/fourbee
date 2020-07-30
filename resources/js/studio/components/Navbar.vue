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
            <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="dropdownMenu"
            >
                <h6 class="dropdown-header">
                    {{ user.name }}
                    <br />
                    {{ user.email }}
                </h6>
                <div class="dropdown-divider"></div>
                <a
                    :href="'/' + canvasPath + '/posts'"
                    class="dropdown-item font-medium"
                    >Posts</a
                >
                <a
                    :href="'/' + canvasPath + '/tags'"
                    class="dropdown-item font-medium"
                    >Tags</a
                >
                <a
                    :href="'/' + canvasPath + '/topics'"
                    class="dropdown-item font-medium"
                    >Topics</a
                >
                <a
                    :href="'/' + canvasPath + '/stats'"
                    class="dropdown-item font-medium"
                    >Stats</a
                >
                <a
                    href="javascript:void(0)"
                    onclick="modalCS = true"
                    class="dropdown-item font-medium"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    >Customers</a
                >
                <div class="dropdown-divider"></div>
                <a
                    :href="'/' + canvasPath + '/settings'"
                    class="dropdown-item font-small"
                    >Settings</a
                >
                <a
                    class="dropdown-item font-small"
                    style="cursor: pointer"
                    @click.prevent="logout"
                    >Sign out</a
                >
            </div>
        </div>

        <div
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
                        <h5
                            class="modal-title text-center"
                            id="exampleModalLabel"
                        >
                            Daftar Customers
                            <span class="text-info">Fourbee laundry</span>
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col md-12">
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Telepon</th>
                                                <th scope="col">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                v-for="(cs, index) in customers
                                                    .data.data"
                                                :key="cs.id"
                                                class="text-left"
                                            >
                                                <th
                                                    scope="row"
                                                    class="text-center"
                                                >
                                                    {{
                                                        customers.data.from +
                                                            index
                                                    }}
                                                </th>
                                                <td>{{ cs.nama }}</td>
                                                <td>{{ cs.no_telp }}</td>
                                                <td>{{ cs.alamat }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <pagination
                                    :data="customers.data"
                                    :size="small"
                                    :align="center"
                                    @pagination-change-page="fetchData"
                                >
                                    <span slot="prev-nav">&lt;&lt; </span>
                                    <span slot="next-nav">
                                        &gt;&gt;</span
                                    ></pagination
                                >
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary btn-sm"
                            data-dismiss="modal"
                        >
                            tutup
                        </button>
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
    name: "navbar",
    data() {
        return {
            user: Studio.user,
            avatar: Studio.avatar,
            canvasPath: Studio.canvasPath,
            customers: []
        };
    },
    components: {
        pagination
    },
    methods: {
        logout() {
            let instance = axios.create();
            let token = document.head.querySelector('meta[name="csrf-token"]')
                .content;
            axios
                .post("/api/logout", {
                    _token: token
                })
                .then(response => {
                    window.location.href = "/";
                });
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
                    _token: token
                })
                .then(response => {
                    this.customers = response;
                });
        }
    },
    created() {
        this.fetchData();
    }
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
