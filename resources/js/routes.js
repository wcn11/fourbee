export default [
    {
        path: "/",
        name: "Home",
        component: require("./components/Home").default
    },
    {
        path: "/kontak-kami",
        name: "OurContact",
        component: require("./components/OurContact.vue").default
    },
    {
        path: "/laundry-kiloan",
        name: "LaundryPakaian",
        component: require("./components/Services/LaundryPakaian.vue").default
    },
    {
        path: "/laundry-stroller",
        name: "LaundryStroller",
        component: require("./components/Services/LaundryStroller.vue").default
    },
    {
        path: "/laundry-pakaian-dan-tas",
        name: "LaundrySepatuTas",
        component: require("./components/Services/LaundrySepatuTas.vue").default
    },
    {
        path: "/cuci-sofa",
        name: "LaundryCuciSofa",
        component: require("./components/Services/LaundryCuciSofa.vue").default
    },
    {
        path: "/cuci-springbed",
        name: "LaundrySpringBed",
        component: require("./components/Services/LaundrySpringBed.vue").default
    },
    {
        path: "/fourbee-point",
        name: "FourbeePoint",
        component: require("./components/FourbeePoint.vue").default
    },
    {
        path: "/blogs",
        name: "blogs",
        component: require("./studio/screens/HomeScreen").default
    },
    {
        path: "/tags",
        name: "tags",
        component: require("./studio/screens/TagScreen").default
    },
    {
        path: "/tags/:slug",
        name: "tag-posts",
        component: require("./studio/screens/TagPostsScreen").default
    },
    {
        path: "/topics",
        name: "topics",
        component: require("./studio/screens/TopicScreen").default
    },
    {
        path: "/topics/:slug",
        name: "topic-posts",
        component: require("./studio/screens/TopicPostsScreen").default
    },
    {
        path: "/article/:identifier",
        name: "user",
        component: require("./studio/screens/UserScreen").default
    },
    {
        path: "/:identifier/:slug",
        name: "post",
        component: require("./studio/screens/PostScreen").default
    },
    {
        path: "/customers",
        name: "customers",
        component: require("./components/Customers.vue").default
    },
    // {
    //     path: "/login",
    //     name: "Login",
    //     component: require("./components/Login.vue").default
    // },
    {
        path: "*",
        name: "catch-all",
        redirect: "/"
    }
];
