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
        <div class="dropdown-divider"></div>
        <a :href="'/' + canvasPath + '/settings'" class="dropdown-item font-small">Settings</a>
        <a class="dropdown-item font-small" style="cursor: pointer" @click.prevent="logout">Sign out</a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "navbar",

  data() {
    return {
      user: Studio.user,
      avatar: Studio.avatar,
      canvasPath: Studio.canvasPath
    };
  },

  methods: {
    logout() {
      let instance = axios.create();
      let token = document.head.querySelector('meta[name="csrf-token"]')
        .content;
      // instance.defaults.headers.common["X-CSRF-TOKEN"] = token.content;
      // instance.defaults.baseURL = "/";

      axios
        .post("/api/logout", {
          _token: token
        })
        .then(response => {
          window.location.href = "/";
        });
    }
  }
};
</script>

<style scoped>
.font-small {
  font-size: xx-small !important;
}
.font-medium {
  font-size: 12px;
}
</style>
