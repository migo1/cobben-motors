<template>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <div class="auth-wrapper auth-v1 px-2">
                <div class="auth-inner py-2">
                    <!-- Login v1 -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="javascript:void(0);" class="brand-logo">
                                <!-- <Logo /> -->
                                <h2 class="brand-text text-primary ml-1">
                                    Vuexy
                                </h2>
                            </a>
                            <br/>
                            <!-- <span class="danger" v-if="errors.email">{{
                errors.email[0]
              }}</span> -->

                            <h4 class="card-title mb-1">
                                Welcome to Vuexy! 👋
                            </h4>
                            <p class="card-text mb-2">
                                Please sign-in to your account and start the
                                adventure
                            </p>

                            <form
                                class="auth-login-form mt-2"
                                @submit.prevent="submit"
                            >
                                <div class="form-group">
                                    <label for="login-email" class="form-label"
                                        >Email</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="login-email"
                                        v-model="state.form.email"
                                        placeholder="john@example.com"
                                        aria-describedby="login-email"
                                        tabindex="1"
                                        autofocus
                                    />
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="login-password"
                                            >Password</label
                                        >
                                        <a
                                            href="page-auth-forgot-password-v1.html"
                                        >
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>
                                    <div
                                        class="input-group input-group-merge form-password-toggle"
                                    >
                                        <input
                                            type="password"
                                            class="form-control form-control-merge"
                                            id="login-password"
                                            v-model="state.form.password"
                                            tabindex="2"
                                            placeholder="password"
                                            aria-describedby="login-password"
                                        />
                                        <div class="input-group-append">
                                            <span
                                                class="input-group-text cursor-pointer"
                                                ><i data-feather="eye"></i
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input
                                            class="custom-control-input"
                                            type="checkbox"
                                            id="remember-me"
                                            tabindex="3"
                                        />
                                        <label
                                            class="custom-control-label"
                                            for="remember-me"
                                        >
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-primary btn-block"
                                    tabindex="4"
                                >
                                    Sign in
                                </button>
                            </form>

               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { reactive, onMounted } from "vue";
import { useForm ,Link} from "@inertiajs/vue3";

import Auth from "@/Shared/Layouts/Auth.vue";
export default {
    layout: Auth,
    components:{Link},

    setup() {
        const state = reactive({
            loading: false,
            form: useForm({
                email: null,
                password: null,
                remember: false,
            }),
        });

        let submit = () => {
            state.form.post("/login");
        };

        onMounted(() => {});

        return { state, submit };
    },
};
</script>