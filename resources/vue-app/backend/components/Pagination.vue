
<template>
    <div class="flex justify-between items-center p-4 pt-8 bg-gray-800">
        <div class="flex-1 flex justify-start items-center">
            <label>Items/Page</label>
            <select v-model="filterData.per_page" @change="fetchData" class="bg-gray-700 py-1.5 rounded hover:bg-gray-600 focus:outline-none text-center">
                <template v-for="i in perPageArr">
                    <option :value="i">{{ i }}</option>
                </template>
            </select>
        </div>
       <div class="flex flex-1 justify-center">
           <!-- Previous button with arrow symbol -->
           <button
                   @click="onPreviousClick"
                   :disabled="currentPage === 1"
                   class="btn pagination-btn mx-2"
           >
               &lt;  <!-- Left arrow symbol -->
           </button>

           <!-- Page number buttons with ellipsis -->
           <button
                   v-for="page in paginationRange"
                   :key="page"
                   @click="onPageClick(page)"
                   :disabled="currentPage === page"
                   :class="['btn', 'pagination-btn', 'mx-1', { 'btn-active': currentPage === page, 'btn-inactive': currentPage !== page }]"
           >
               {{ page }}
           </button>

           <!-- Next button with arrow symbol -->
           <button
                   @click="onNextClick"
                   :disabled="currentPage === lastPage"
                   class="btn pagination-btn mx-2"
           >
               &gt;  <!-- Right arrow symbol -->
           </button>
       </div>
        <div class="flex-1"></div>
    </div>
</template>

<script>
    export default {
        name: "Pagination",
        props: {
            currentPage: {
                type: Number,
                required: true
            },
            lastPage: {
                type: Number,
                required: true
            },
        },
        computed: {
            paginationRange() {
                const totalNumbers = 5;  // Number of page buttons to display
                const totalBlocks = totalNumbers + 2;  // Including "Back" and "Next"

                if (this.lastPage <= totalBlocks) {
                    //console.log("Pagination range includes all pages:", Array.from({ length: this.lastPage }, (_, i) => i + 1));
                    return Array.from({ length: this.lastPage }, (_, i) => i + 1);
                }

                const pages = [];
                const left = Math.max(1, this.currentPage - 2);
                const right = Math.min(this.lastPage, this.currentPage + 2);

                for (let i = left; i <= right; i++) {
                    pages.push(i);
                }

                if (left > 1) {
                    pages.unshift(1);  // Add the first page
                    if (left > 2) {
                        pages.splice(1, 0, "...");  // Add ellipsis
                    }
                }

                if (right < this.lastPage) {
                    pages.push(this.lastPage);  // Add the last page
                    if (right < this.lastPage - 1) {
                        pages.splice(-1, 0, "...");  // Add ellipsis
                    }
                }

                console.log("Computed pagination range:", pages);
                return pages;
            }
        },
        methods: {
            onPreviousClick() {
                if (this.currentPage > 1) {
                    this.fetchData({params: {page: this.currentPage - 1}})
                }
            },
            onNextClick() {
                if (this.currentPage < this.lastPage) {
                    this.fetchData({params: {page: this.currentPage + 1}})
                }
            },
            onPageClick(page) {
                if (this.currentPage !== page) {
                    this.fetchData({params: {page}});
                }
            }
        }
    };
</script>

<style scoped>
    .pagination-btn {
        background-color: #dc2626;
        border: 2px solid gray;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .pagination-btn:disabled {
        background-color: gray;
        border: 2px solid #b91c1c;
    }

    .pagination-btn.btn-active {
        background-color: #dc2626;
        border: 2px solid gray;
    }

    .pagination-btn.btn-inactive {
        background-color: #374151;
        border: 2px solid #b91c1c;
    }

    .pagination-btn:hover:not(:disabled) {
        background-color: #b91c1c;
        border: 2px solid gray;
    }

    .pagination span {
        align-self: center;
        color: #423a8e;
    }
</style>