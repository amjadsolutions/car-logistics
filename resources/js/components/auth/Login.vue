<template>
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h2">
                        <b>CAR </b>LOGOSTICS
                    </a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form @submit.prevent="handleLogin">
                        <div class="input-group mb-3">
                            <input
                                type="email"
                                v-model="email"
                                class="form-control"
                                placeholder="Email"
                                required
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="password"
                                v-model="password"
                                class="form-control"
                                placeholder="Password"
                                required
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="social-auth-links text-center mt-2 mb-3">
                            <button
                                type="submit"
                                class="btn btn-block btn-primary"
                            >
                                <i class="fab fa-facebook mr-2"></i> Sign in
                            </button>
                        </div>
                    </form>

                    <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="/register" class="text-center"
                            >Register a new membership</a
                        >
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            email: "",
            password: "",
            errorMessage: "",
        };
    },
    methods: {
        async handleLogin() {
            try {
                const response = await axios.post("/api/login", {
                    email: this.email,
                    password: this.password,
                });
                // Assuming your API returns a token
                localStorage.setItem("token", response.data.token);
                this.$router.push("/dashboard"); // Redirect to dashboard or another route
            } catch (error) {
                this.errorMessage =
                    error.response.data.message || "An error occurred";
            }
        },
    },
};
</script>

<style scoped>
/* Scoped styles to override or add to AdminLTE styles if needed */
</style>
