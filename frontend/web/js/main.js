$(document).ready(function () {

    $(".monitoring").click(function (e) {
        e.preventDefault();
        $("html,body").animate({
            scrollTop: $(".monitoring-solutions").offset().top
        }, 1000)
        $(this).css('color', 'white');
    });


    $(".home").click(function (e) {
        e.preventDefault();
        $("html,body").animate({
            scrollTop: $(".page-template").offset().top
        }, 1000)
        $(this).css('color', 'white');
    });

    $(".solution").click(function (e) {
        e.preventDefault();
        $("html,body").animate({
            scrollTop: $(".solution-area").offset().top
        }, 1000)
        $(this).css('color', 'white');
    });

    $(".contact").click(function (e) {
        e.preventDefault();
        $("html,body").animate({
            scrollTop: $(".contact-area").offset().top
        }, 1000)
        $(this).css('color', 'white');
    });


})

window.dataLayer = window.dataLayer || [];
window.dataLayer.push({'Products presented': 'crop monitoring'});

(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
    var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-KJ7WS5T');




