<template>
    <div class="w-full rounded-lg mb-4 bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between mb-3">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Items Report</h5>
        </div>

        <!-- Bar Chart -->
        <div id="bar-chart"></div>
    </div>
</template>

<script>
    import ApexCharts from 'apexcharts';

    export default {
        name: "ItemsBarChart",

        mounted() {
            this.renderBarChart();
        },
        methods: {
            renderBarChart() {
                const options = {
                    series: [
                        {
                            name: "Count",
                            data: [10, 15, 8, 20, 12], // Example data counts for items
                        },
                    ],
                    chart: {
                        type: "bar",
                        height: 320,
                        width: "100%",
                    },
                    colors: ["#dc2626"], // Bar color
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: "55%",
                            endingShape: "rounded",
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ["#ffffff"], // Data label text color set to white
                        },
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ["transparent"],
                    },
                    xaxis: {
                        categories: ["Item A", "Item B", "Item C", "Item D", "Item E"], // Example item names
                        labels: {
                            style: {
                                colors: "#ffffff", // X-axis label color
                            },
                        },
                    },
                    yaxis: {
                        title: {
                            text: "Count",
                            style: {
                                color: "#ffffff", // Y-axis title color
                            },
                        },
                        labels: {
                            style: {
                                colors: "#ffffff", // Y-axis label color
                            },
                        },
                    },
                    fill: {
                        opacity: 1,
                    },
                    tooltip: {
                        theme: "dark", // Tooltip text color set to white
                        y: {
                            formatter: function (val) {
                                return val + " items"; // Tooltip value format
                            },
                        },
                    },
                    legend: {
                        labels: {
                            colors: "#ffffff", // Legend label color
                        },
                    },
                };

                if (document.getElementById("bar-chart") && typeof ApexCharts !== "undefined") {
                    const chart = new ApexCharts(document.getElementById("bar-chart"), options);
                    chart.render();
                }
            },
        },
    };
</script>

<style scoped>
    /* Additional styling if needed */
</style>
