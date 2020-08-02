use Illuminate\Support\Arr;
<template>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form
                    class="login100-form validate-form"
                    v-on:submit.prevent="submitLogin"
                >
                    <span class="login100-form-title mb-5">
                        <span>Login</span> Fourbee
                        <img src="../img/favicon.png" class="img-fluid" />
                    </span>
                    <div
                        v-if="login == false"
                        class="alert alert-danger"
                        role="alert"
                    >
                        Email atau password salah!
                    </div>
                    <div
                        class="wrap-input100 validate-input m-b-35"
                        data-validate="Enter username"
                    >
                        <input
                            class="input100"
                            type="text"
                            v-model="email"
                            name="email"
                        />
                        <span
                            class="focus-input100"
                            data-placeholder="Email"
                        ></span>
                    </div>

                    <div
                        class="wrap-input100 validate-input m-b-50"
                        data-validate="Enter password"
                    >
                        <input
                            class="input100"
                            type="password"
                            v-model="password"
                            name="pass"
                        />
                        <span
                            class="focus-input100"
                            data-placeholder="Password"
                        ></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            {{ btnLogin }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from "axios";

export default {
    name: "Login",
    data() {
        return {
            email: "",
            password: "",
            login: true,
            btnLogin: "Login"
        };
    },
    methods: {
        submitLogin() {
            this.login = false;
            this.btnLogin = "Loading...";
            const post = Axios.post("api/login", {
                email: this.email,
                password: this.password
            }).then(response => (this.login = response.data.success));
            this.btnLogin = "Login";
            this.$router.push({
                path: "blogs"
            });
        }
    },
    created() {}
};
</script>

<style scoped>
@import "../assets/css_login/main.css";
@import "../assets/css_login/util.css";
</style>
