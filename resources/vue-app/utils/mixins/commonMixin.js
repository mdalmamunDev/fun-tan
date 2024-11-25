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
        setPageTitle({suffix}) {
            document.title = this.appName + ' | ' + suffix ?? this.$route.meta.pageTitle;
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

        dd(data) {
            console.log(data);
        },
        isEmptyData(data) {
            if (data == null || data === '') return true;
            if (typeof data === 'string' || Array.isArray(data)) return data.length === 0;
            if (typeof data === 'object') return Object.keys(data).length === 0;
            return false;
        },
        objLen(obj) {
            if (!obj || obj !== 'object') return 0;

            return Object.keys(obj).length;
        },
        asset(path) {
            return baseUrl + '/' + path;
        },
        generateFileUrl(file, type = this.TYPE_COURSE) {
            let def = this.DEF_FILES[type];

            if (file && file.path)
                def = 'storage/' + file.path;

            return this.baseUrl + '/' + def;
        },
        limitText(text, maxLength = 70) {
            if (text && text.length > maxLength) {
                return text.substring(0, maxLength) + '...';
            }
            return text;
        },

        removeArrItem(array, item) {
            if (!Array.isArray(array) || !item) return;

            const index = array.indexOf(item);
            array.splice(index , 1)
        },

        removeObjArrItem(objArr, obj, key = 'id') {
            if (!Array.isArray(objArr) || !obj || !obj[key]) return;

            const index = objArr.findIndex(item => item[key] === obj[key]);
            if (index !== -1) objArr.splice(index, 1);
        },
        formatDecimal(value) {
            if (value % 1 === 0) return parseInt(value);
            return parseFloat(value).toFixed(2);
        },
        formatSecondsToTime(seconds) {
            if (seconds === null || seconds === undefined) return 'NA';

            const hours = Math.floor(seconds / 3600);            // Calculate hours
            const minutes = Math.floor((seconds % 3600) / 60);   // Calculate minutes
            const remainingSeconds = seconds % 60;                // Calculate remaining seconds

            // Build the time string conditionally
            let formattedTime = [];

            if (hours > 0) formattedTime.push(String(hours));  // Include hours only if greater than 0
            formattedTime.push(String(minutes).padStart(2, '0'));  // Always include minutes
            formattedTime.push(String(remainingSeconds).padStart(2, '0')); // Always include seconds

            return formattedTime.join(':'); // Join components with a colon
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