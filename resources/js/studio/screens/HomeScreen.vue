<template>
  <div>
    <vue-headful
      title="Blog — Fourbee"
      description="Blog forubee yang membahas meliputi tips & triks laundry."
    />

    <div class="mt-5 pt-5">
      <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 mt-3">
        <h1 class="font-serif">Fourbee Artikel</h1>
        <p class="lead text-secondary">Tips & Trik mengenai laundry.</p>

        <main role="main" class="mt-5">
          <div v-if="posts.length > 0">
            <h4 class="mb-4 border-bottom pb-2">
              <span class="border-bottom border-dark pb-2">Featured</span>
            </h4>

            <featured-post-list :posts="posts.slice(0, featuredPostCount)"></featured-post-list>

            <h4
              v-if="posts.slice(featuredPostCount).length > 0"
              class="my-4 border-bottom mt-5 pb-2"
            >
              <span class="border-bottom border-dark pb-2">All Posts</span>
            </h4>

            <post-list :posts="posts.slice(featuredPostCount)"></post-list>
          </div>

          <div v-else class="col-12">
            <p class="lead text-muted text-center mt-5 pt-5">You have no published posts</p>
            <p class="lead text-muted text-center mt-1">Write on the go with our mobile-ready app!</p>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>

<script>
import NProgress from "nprogress";
import vueHeadful from "vue-headful";
// import Navbar from "../components/Navbar";
import PostList from "../components/PostList";
import FeaturedPostList from "../components/FeaturedPostList";

export default {
  name: "home-screen",

  components: {
    FeaturedPostList,
    // Navbar,
    PostList,
    vueHeadful
  },

  data() {
    return {
      featuredPostCount: 4,
      posts: []
    };
  },

  mounted() {
    this.fetchPosts();
  },

  methods: {
    fetchPosts() {
      this.request()
        .get("api/" + Studio.path + "/posts")
        .then(response => {
          this.posts = response.data.posts;

          NProgress.done();
        })
        .catch(error => {
          // Add any error debugging...
          this.$router.push({ name: "home" });

          NProgress.done();
        });
    }
  }
};
</script>
