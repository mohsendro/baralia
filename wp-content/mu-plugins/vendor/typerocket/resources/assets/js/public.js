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




jQuery(document.body).on(
    "init_checkout payment_method_selected update_checkout updated_checkout checkout_error applied_coupon_in_checkout removed_coupon_in_checkout adding_to_cart added_to_cart removed_from_cart wc_cart_button_updated cart_page_refreshed cart_totals_refreshed wc_fragments_loaded init_add_payment_method wc_cart_emptied updated_wc_div updated_cart_totals country_to_state_changed updated_shipping_method applied_coupon removed_coupon",
    function (e) {
      console.log(e.type)

      let counter = document.getElementsByClassName('header-cart-icon-counter')[0];
      console.log(counter);
    }
)

