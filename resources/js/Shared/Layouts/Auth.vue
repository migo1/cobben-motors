<template>
    <div>
        <!-- <SuccessToast></SuccessToast>
        <ErrorToast></ErrorToast> -->
        <div>
            <slot />
        </div>
    </div>
</template>

<script>
export default {
    props: {
        errors: {
            type: Object,
            default: () => ({}),
        },
    },

    metaInfo: {
        link: [
            {
                rel: "stylesheet",
                type: "text/css",
                href: "/app-assets/css/plugins/forms/form-validation.css",
            },
            {
                rel: "stylesheet",
                type: "text/css",
                href: "/app-assets/css/pages/page-auth.css",
            },
        ],
        script: [
            {
                src: "/app-assets/vendors/js/forms/validation/jquery.validate.min.js",
                type: "text/javascript",
                body: true,
                defer: true,
            },

            {
                src: "/app-assets/js/scripts/pages/page-auth-login.js",
                type: "text/javascript",
                body: true,
                defer: true,
            },
        ],
    },

    watch: {
        errors: function (data) {
            if (data) {
                this.$store.commit("toggleErrorToast", data);
            }
        },
    },
};
</script>