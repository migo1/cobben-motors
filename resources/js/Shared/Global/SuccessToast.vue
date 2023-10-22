<template>
  <div
    class="toast toast-wrapper toast-translucent mt-1 customtoast"
    :class="state.displaystatus == true ? 'show' : ''"
  >
    <div class="toast-header bg-success">
      <strong class="mr-auto text-white">Success</strong>
      <button type="button" class="ml-1 close" @click="closeToast">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body bg-light-success"><b>{{ state.message }}</b></div>
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
            displaystatus: computed(() => store.state.displaystatus),
            message: computed(() => store.state.SuccessMessage),
        })

          const closeToast = () => {
            store.commit("toggleSuccessToast");
          };

        onMounted(() => { });

        watch(
            () => state.displaystatus,
            (data) => {
                if (data === true) {
                    setTimeout(() => {
                        store.commit("toggleSuccessToast");
                    }, 2000);
                }
            }
        );

        return {
            closeToast,
            state
        };

        
    }

};
</script>