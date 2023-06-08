// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [
            "11-12-2023",
            "12-12-2023",
            "13-12-2023",
            "14-12-2023",
            "15-12-2023",
            "16-12-2023",
            "17-12-2023",
        ],
        datasets: [
            {
                label: "Sessions",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: [
                    1000000, 3016200, 2626300, 1839400, 1828700, 2868200,
                    3127400, 3325900, 2584900, 2415900, 3265100, 3198400,
                    3845100,
                ],
            },
        ],
    },
    options: {
        scales: {
            xAxes: [
                {
                    time: {
                        unit: "date",
                    },
                    gridLines: {
                        display: false,
                    },
                    ticks: {
                        maxTicksLimit: 7,
                    },
                },
            ],
            yAxes: [
                {
                    ticks: {
                        min: 0,
                        max: 5000000,
                        maxTicksLimit: 8,
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    },
                },
            ],
        },
        legend: {
            display: false,
        },
    },
});
