<template>
    <section class="blog_w3ls" id="blog">
        <div class="container">
            <div class="title-section text-center mb-md-5 mb-4">
                <p class="w3ls-title-sub">Posts</p>
                <h3 class="w3ls-title mb-3">
                    Informasi & Blog
                    <span>Fourbee</span>
                </h3>
                <p class="titile-para-text mx-auto">
                    Beberapa informasi yang dapat di bagikan kepada anda
                </p>
            </div>
            <div class="row">
                <!-- blog grid -->

                <div
                    v-for="post in posts.slice(0, 3)"
                    :key="post.id"
                    class="col-lg-4 col-md-6"
                >
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="post.user_id + '/' + post.slug">
                                <img
                                    :src="post.featured_image"
                                    class="card-img-bottom img-fluid image-poster"
                                    alt="image"
                                />
                            </a>
                            <img
                                :src="post.user_meta.avatar"
                                alt="Avatar"
                                class="img-blog rounded-circle img-fluid"
                                style="width: 35%"
                            />
                        </div>
                        <div class="card-body text-center pt-5 mt-2">
                            <h5 class="blog-title card-title mb-5 post-title">
                                <a href="post.user_id + '/' + post.slug">{{
                                    post.title
                                }}</a>
                            </h5>
                            <div
                                class="blog_w3icon border-top border-bottom py-1 mb-3"
                            >
                                <span>{{
                                    post.published_at | formatDate
                                }}</span>
                            </div>
                            <p>{{ post.summary }}</p>
                            <a
                                :href="post.user_id + '/' + post.slug"
                                class="button-w3ls mt-4"
                            >
                                Baca selebihnya
                                <span
                                    class="fa fa-caret-right ml-1"
                                    aria-hidden="true"
                                ></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
    name: "Blogs",
    data() {
        return {
            posts: []
        };
    },
    methods: {
        async fetchData() {
            let response = await axios
                .get("api/blogs/posts")
                .then(response => (this.posts = response.data.posts));
        }
    },
    created() {
        this.fetchData();
    },
    filters: {
        formatDate: function(value) {
            moment.locale("id");
            return moment(new Date(value)).format("Do MMMM YYYY");
        }
    }
};
</script>

<style scoped>
.image-poster {
    width: 100% !important;
    height: 250px;
}
.post-title a {
    font-size: 19px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: pre-line;
}
</style>
