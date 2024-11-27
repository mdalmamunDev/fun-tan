export default {
    data() {
        return {
            authUser: window.authUser,
            appName: 'Fun-Tan',
            baseUrl: window.baseUrl,
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

            return baseUrl + '/' + def;
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
        },

        // UI
        showStatus({val, dangerVal = 0, successVal = 1, warningVal=2, dangerText='In Active', successText = 'Active', warningText='Pending'}) {
            if (val === successVal)
                return `<button class="bg-gradient-to-br from-red-600 to-yellow-800 group-hover:from-red-600 group-hover:to-yellow-800 relative inline-flex items-center justify-center p-0.5 overflow-hidden rounded-lg group hover:text-white\`" title="Status">
                            <span class="text-red-600 hover:text-white relative px-1 py-0.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                                ${successText}
                            </span>
                        </button>`;
            if (val === dangerVal)
                return `<button class="bg-gradient-to-br from-gray-700 to-yellow-800 group-hover:from-gray-700 group-hover:to-yellow-800 relative inline-flex items-center justify-center p-0.5 overflow-hidden rounded-lg group hover:text-white\`" title="Status">
                            <span class="text-gray-400 hover:text-white relative px-1 py-0.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                                ${dangerText}
                            </span>
                        </button>`;
            if (val === warningVal)
                return `<button class="bg-gradient-to-br from-yellow-600 to-red-900 group-hover:from-yellow-600 group-hover:to-red-900 relative inline-flex items-center justify-center p-0.5 overflow-hidden rounded-lg group hover:text-white\`" title="Status">
                            <span class="text-yellow-500 hover:text-white relative px-1 py-0.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                                ${warningText}
                            </span>
                        </button>`;

            return 'NA';

        }
    }
}