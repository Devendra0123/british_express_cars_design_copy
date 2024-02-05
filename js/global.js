$(function () {
    /*$('.slider').slick({
        infinite: true,
        dots: true,
        fade: false,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [{
            breakpoint: 1154,
            settings: {arrows: false, centerMode: true, centerPadding: '40px', slidesToShow: 3}
        }, {
            breakpoint: 991,
            settings: {arrows: false, centerMode: true, centerPadding: '0px', slidesToShow: 2}
        }, {breakpoint: 640, settings: {arrows: false, centerMode: true, centerPadding: '0px', slidesToShow: 1}}]
    });*/
    /*$('.fleet-slider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        dots: false,
        infinite: false,
        speed: 2500,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1150,
            settings: {arrows: false, centerMode: true, centerPadding: '40px', slidesToShow: 3}
        }, {
            breakpoint: 991,
            settings: {arrows: false, centerMode: true, centerPadding: '0px', slidesToShow: 2}
        }, {breakpoint: 640, settings: {arrows: false, centerMode: true, centerPadding: '0px', slidesToShow: 1}}]
    });*/
    var returnJourney = $("#return-journey");
    $(".return").click(function () {
        $(returnJourney).slideDown();
        $(this).addClass("active");
        $(".single").removeClass("active");
    });
    $(".single").click(function () {
        $(returnJourney).slideUp();
        $(this).addClass("active");
        $(".return").removeClass("active");
    });
});
$('.bar').click(function () {
    $('.navbar').slideToggle(200);
    $(this).toggleClass('rotate', 200);
});



$('#lead-switch').click(function () {
    $('#lead-passenger').slideToggle();
    validate_lead_passanger();
});
$('#charge-switch').click(function () {
    $('#charges').slideToggle();
});
$(function () {
    $('#showdiv1').click(function () {
        $('div[id^=div]').hide();
        $('#div1').show();
    });
    $('#showdiv2').click(function () {
        $('div[id^=div]').hide();
        $('#div2').show();
    });
    $('#showdiv3').click(function () {
        $('div[id^=div]').hide();
        $('#div3').show();
    });
})