export const mutations = {
    setAuth(state, data) {
        if (!data) data = {}; 
        
        state.auth = data;
    },
    setDataList(state, data) {
        state.dataList = data;
    },
    setFormData(state, data) {
        state.formData = data;
    },
    setConfig(state, data) {
        state.Config = data;
    },
    setSettings(state, data) {
        state.settings = data;
    },
    setShowHeader(state, data) {
        state.showHeader = data;
    },
    setShowFooter(state, data) {
        state.showFooter = data;
    },
    setShowModal(state, data) {
        state.showModal = data;
    }
};