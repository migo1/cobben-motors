import { createStore } from "vuex";
import createPersistedState from "vuex-persistedstate";

const store = createStore({
    plugins: [
        createPersistedState({
            paths: ["currentLayout"],
        }),
    ],
    state: {
        displaystatus: false,
        SuccessMessage: "test",
        displayerrorstatus: false,
        ErrorMessage: null,
        ifcollapses: false,
        displaysearch: false,
        search: false,
        editData: null,
        featureCarId: null,
        items: [],
        currentLayout: "",
        pagetext: "",
    },

    mutations: {
        toggleSuccessToast(state, data) {
            state.displaystatus = !state.displaystatus;
            state.SuccessMessage = data;
        },

        toggleErrorToast(state, data) {
            state.displayerrorstatus = !state.displayerrorstatus;
            state.ErrorMessage = data;
        },
        toggleCollapse(state) {
            state.ifcollapses = !state.ifcollapses;
        },
        toggleSearch(state) {
            state.displaysearch = !state.displaysearch;
        },
        searchState(state, data) {
            state.search = data;
        },
        putSearchPayload(state, data) {
            state.searchPayload = data;
            if (data == null) {
                state.search = false;
                state.displaysearch = false;
            }
        },
        editDataState(state, data) {
            state.editData = data;
        },

        featureCarIdState(state, data) {
            state.featureCarId = data;
            console.log(state.featureCarId)
        },
        clearEditData(state) {
            state.editData = null;
        },
        timeFileName(state, data) {
            state.timeFileName = data;
        },
        clearItemsData(state) {
            state.items = [];
        },
        changeLayoutColor(state, data) {
            state.currentLayout = data;
        },
        setPageText(state, data) {
            state.pagetext = data;
        },
    },

    actions: {
        getFormattedTime({ commit }) {
            var today = new Date();
            var y = today.getFullYear();
            var m = today.getMonth() + 1;
            var d = today.getDate();
            var h = today.getHours();
            var mi = today.getMinutes();
            var s = today.getSeconds();

            var time = y + "-" + m + "-" + d + "_" + h + ":" + mi + ":" + s;
            commit("timeFileName", time);
        },

        toggleToast({ commit }) {
            commit("toggleSuccessToast");
        },
    },
});

export default store;
