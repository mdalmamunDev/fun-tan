import Axios from "axios";
import Swal from 'sweetalert2';

export default {
    methods: {
        /**
         * Generates a URL using the base URL, custom URL, and optional suffix.
         * If a `customUrl` is passed, it will append it to the base URL; otherwise, it will use the `dataUrl` from the current route.
         * A `suffix` can also be appended to the generated URL.
         */
        generateUrl(customUrl = false, suffix = false, params = {}) {
            let url = baseUrl;

            if (customUrl)
                url += '/' + customUrl;
            else
                url += '/' + this.$route.meta.dataUrl;

            if (suffix)
                url += '/' + suffix;

            if (Object.keys(params).length > 0) {
                // Add query parameters
                const queryParams = Object.entries(params)
                    .map(([key, value]) => `${encodeURIComponent(key)}=${encodeURIComponent(value)}`)
                    .join('&');

                url += `?${queryParams}`;
            }

            return url;
        },

        /**
         * Fetches data from the server using a given URL.
         * If a callback is provided, it will handle the response.
         * Otherwise, the fetched data is used to update the local data list.
         */
        fetchData(url = false, callback = false) {
            if (!callback && this) {
                // reset data to empty
                this.$store.commit('setDataList', {});
            }

            const _this = this;
            this.httpReq({
                url,
                callback: (response) => {
                    if (response.data) {
                        // check if the user is permitted
                        // if (response.data.status === _this.CODE_DANGER)
                            // _this.showToast(response.data.message, 'error');

                        // If a callback is provided, use it to handle the data
                        if (typeof callback === 'function') callback(response.data.result);
                        // Otherwise, update the local data list with the fetched data
                        else _this.$store.commit('setDataList', response.data.result);
                    }
                }
            });
        },

        onClickUpdate(item) {
            let copy = Object.assign({}, item); // to avoid reference
            this.$store.commit('setFormData', copy);
            this.openModal();
        },

        deleteItem(id, currentPage, params = {}) {
            const _this = this;

            // Display confirmation dialog using SweetAlert2
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you really want to delete this item? This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (!result.isConfirmed) return;

                // User confirmed deletion
                _this.httpReq({
                    urlSuffix: id,
                    method: 'delete',
                    callback: (response) => {
                        if (response.data) {
                            // Show success toast notification
                            this.$toast(response.data.message, {type: 'success',});
                            // Refetch the updated data
                            _this.fetchData(_this.generateUrl(false, false, { ...{ page: currentPage }, ...params }));
                        }
                    },
                });
            });
        },



        /**
         * Sends an HTTP request using Axios with customizable parameters.
         * Supports various HTTP methods (GET, POST, PUT, DELETE) and allows for dynamic URL generation.
         * The response is handled through an optional callback function.
         */
        httpReq({ url = false, customUrl = false, urlSuffix = false, method = 'get', callback = false, data = false }) {
            const _this = this;

            Axios({
                method: method,  // HTTP method (GET, POST, etc.)
                url: url ? url : _this.generateUrl(customUrl, urlSuffix),  // Generate the full URL
                data: data ? data : (this.$store ? this.$store.getters.formData : {})      // The data to be sent with the request (for POST/PUT)
            })
                .then(function (response) {
                    if (typeof callback === 'function') {
                        callback(response);  // Execute the callback with the response
                    }
                })
                .catch(function (error) {
                    // Handle the error here, for example by showing a toast notification
                    // toastr.error(error.message, 'Error!', {positionClass: 'toast-top-center'});
                });
        },



        // add or remove quiz from item
        manipulateQuiz(quizzes, item, data, type) {
            const _this = this;
            this.httpReq({
                customUrl: 'api/quizzes/add-quiz',
                urlSuffix: type,
                method: 'post',
                data,
                callback: (response) => {
                    let { result } = response.data;
                    if (result) {
                        if (result.flag === 1) { // Item added
                            item.quizzes.push(result.quiz);
                            _this.removeObjArrItem(quizzes, result.quiz);
                        }
                        else if (result.flag === 0) { // Item removed
                            _this.removeObjArrItem(item.quizzes, result.quiz);
                            quizzes.push(result.quiz);
                        }
                    }
                }
            });
        },
    }
}