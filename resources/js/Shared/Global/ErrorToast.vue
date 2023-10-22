<template>
  <div
    class="toast toast-wrapper toast-translucent mt-1 customtoast"
    :class="state.displaystatus == true ? 'show' : ''"
  >
    <div class="toast-header bg-danger">
      <strong class="mr-auto text-white">Error</strong>
      <button type="button" class="ml-1 close" @click="closeToast">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body bg-light-danger"><b>{{ state.message }}</b></div>
  </div>
</template>
<style scoped>
.customtoast {
  position: absolute;
  top: 0;
  right: 20px;
}
</style>
<script>
import { reactive, onMounted, computed, watch } from "vue";
import { useStore } from "vuex";

export default {
    setup() {
        const store = useStore();

        const state = reactive({
            displaystatus: computed(() => store.state.displayerrorstatus),
            message: computed(() => {
                var mes = store.state.ErrorMessage;
                var final_mesage = "";
                if (typeof mes === "object") {
                    for (const key in mes) {
                        final_mesage += mes[key] + "\n";
                    }
                    return final_mesage;
                } else {
                    return mes;
                }
            }),
        });

        const closeToast = () => {
            store.commit("toggleErrorToast");
        };

        onMounted(() => {});

        watch(
            () => state.displaystatus,
            (newval) => {
                if (newval === true) {
                    setTimeout(() => {
                        store.commit("toggleErrorToast");
                    }, 2000);
                }
            }
        );

        return {
            state,
            closeToast,
        };
    },
};
</script>