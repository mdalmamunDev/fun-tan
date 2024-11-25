export default {
    data() {
        return {
            baseUrl: window.baseUrl,
            authUser: window.authUser,
            appName: 'Fun-Tan',
            types: [
                { name: 'Movie', value: 1 },
                { name: 'TV Show', value: 2 },
                { name: 'Web Series', value: 3 },
                { name: 'Short Film', value: 4 },
                { name: 'Animation', value: 5 },
            ],
            sorts: [
                { name: 'Name', value: 1 },
                { name: 'Date', value: 2 },
                { name: 'Views', value: 3 },
                { name: 'Duration', value: 4 },
                { name: 'New & Popular', value: 5 },
            ],
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
        getFromObjArr(objArr, key, value) {
            return objArr.find(obj => obj[key] === value) || null;
        },
        setPageTitle() {
            if (this.$route.meta.pageTitle) {
                document.title = this.appName + ' | ' + this.$route.meta.pageTitle;
            }
        },
        generateUrl(customUrl = false, suffix = false) {
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