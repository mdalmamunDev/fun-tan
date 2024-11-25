export default {
    data() {
        return {
            baseUrl: window.baseUrl,
            authUser: window.authUser
        }
    },
    computed: {
        // dataList() {
        //     return this.getDataList();
        // },
        // formData() {
        //     return this.getFormData();
        // },
        // Config() {
        //     return this.getConfig()
        // }
    },
    methods: {
        /**
         * Generates a URL starting with the base URL.
         * If `customUrl` is provided, it's appended; otherwise, `dataUrl` from the route meta is used.
         * If `suffix` is provided, it's added at the end.
         * Returns the full URL.
         */
        urlGenerate(customUrl = false, suffix = false) {
            let url = window.baseUrl;

            if (customUrl)
                url += '/' + customUrl;
            else
                url += '/' + this.$route.meta.dataUrl;

            if (suffix)
                url += '/' + suffix;

            return url;
        },

        objLen(obj) {
            if (typeof obj === 'object')
                return Object.keys(obj).length;
            return null;
        },


        // auth
        can(task) {
            return this.getConfig().permissions.includes(task)
        },


        // store

        getDataList() {
            return this.$store.getters.dataList;
        },
        setDataList(data) {
            this.$store.commit('setDataList', data);
        },

        getFormData() {
            return this.$store.getters.formData;
        },
        setFormData(data) {
            this.$store.commit('setFormData', data);
        },
        resetFormData() {
            this.setFormData({status: 1});
        },

        setConfig(data) {
            this.$store.commit('setConfig', data);
        },
        getConfig() {
            return this.$store.getters.Config;
        }
    }
}