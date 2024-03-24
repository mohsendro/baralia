// Tagify
$(document).ready(function () {
    ///input tag
    $('.commentTags').tagify();
});


// Chart
$(document).ready(function () {
    const ctx = document.getElementById('myChart');
    Chart.defaults.font.family = "yekan-bakh";
    Chart.defaults.font.size = 14;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['23 مهر 1401', '11 آبان 1401', '4 آذر 1401', '11 دی 1401', '5 بهمن 1401',
                '19 اسفند 1401'
            ],
            datasets: [{
                label: 'iphone 12 promax 256',
                data: [1500000, 1700000, 1900000, 1400000, 1600000, 3200000],
                borderWidth: 4,
                borderColor: '#1c39bb',
                pointBackgroundColor: '#eee',
                pointRadius: 5,
                pointHoverRadius: 7,
                tension: 0.1,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: false,
                    text: (ctx) => 'نمودار فروش محصول: ' + 'ایفون 12 pro max',
                },
            }
        }
    });
});


// Bootstrap Slider
$(document).ready(function () {
    ////slider range
    $(".catRange").slider({
        id: "slider5b",
        min: 1500000,
        max: 3000000,
        range: true,
        step: 10000,
        value: [1500000, 3000000],
        rtl: 'false',
        formatter: function formatter(val) {
            if (Array.isArray(val)) {
                return val[0] + " تومان " + "  تا   " + val[1] + " تومان ";
            } else {
                return val;
            }
        },
    });
});