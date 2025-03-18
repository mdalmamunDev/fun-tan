<template>
    <button
            :class="buttonClass"
            title="Status"
            @click="updateStatus"
    >
    <span
            :class="textClass"
            class="relative px-1 py-0.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0"
    >
      {{ statusText }}
    </span>
    </button>
</template>

<script>
    export default {
        name: "StatusButton",

        props: {
            id: {
                type: Number,
                required: true
            },
            status: {
                type: Number,
                required: true
            }
        },
        data() {
            return {
                statusValue: this.status
            };
        },
        computed: {
            buttonClass() {
                switch (this.statusValue) {
                    case 1: return "bg-gradient-to-br from-green-600 to-yellow-800 hover:from-green-600 hover:to-yellow-800 relative inline-flex items-center justify-center p-0.5 overflow-hidden rounded-lg group hover:text-white";
                    case 0: return "bg-gradient-to-br from-red-600 to-yellow-800 hover:from-red-600 hover:to-yellow-800 relative inline-flex items-center justify-center p-0.5 overflow-hidden rounded-lg group hover:text-white";
                    case 2: return "bg-gradient-to-br from-yellow-600 to-red-900 hover:from-yellow-600 hover:to-red-900 relative inline-flex items-center justify-center p-0.5 overflow-hidden rounded-lg group hover:text-white";
                    default: return "bg-gray-400 p-0.5 rounded-lg";
                }
            },
            textClass() {
                switch (this.statusValue) {
                    case 1: return "text-green-600 hover:text-white";
                    case 0: return "text-red-600 hover:text-white";
                    case 2: return "text-yellow-500 hover:text-white";
                    default: return "text-black";
                }
            },
            statusText() {
                switch (this.statusValue) {
                    case 1: return "Active";
                    case 0: return "In Active";
                    case 2: return "Pending";
                    default: return "NA";
                }
            }
        },
        methods: {
            updateStatus() {
                const _this = this;
                this.httpReq({
                    urlSuffix: this.id,
                    method: 'put',
                    data: {id: this.id, status: this.statusValue === 1 ? 0 : 1},
                    callback: ({status}) => {_this.statusValue = status;}
                });
            }
        }
    };
</script>
