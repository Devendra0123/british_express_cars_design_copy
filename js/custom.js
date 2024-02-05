// googleTranslate
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}

// add via toggle
$('.add-via-wrapper').hide();
$('.add-via').click(function () {
    $('.add-via-wrapper').show(200);
//    var icon = $(this).find("i");
//    icon.toggleClass("fa-plus fa-minus");
});
$('.remove-via').click(function () {
    $('.add-via-wrapper').hide(200);
});
// add return date
$(".return_date").hide();

$('.return_date').find('input').attr('disabled', '');

function valueChanged() {
    if ($("input[name='journey_type']").is(":checked")) {
        $(".return_date").show(200);
        $('.return_date').find('input').removeAttr('disabled');
    } else {
        $(".return_date").hide(200);
        $('.return_date').find('input').attr('disabled', '');
    }
}

// lead passeneger quote booking form
$(".lead-pax").hide();
$(".lead-pax").find('input').attr('disabled', '');

function leadvalueChanged() {

    if ($("input[name='lead_on']").is(":checked")) {
        $(".lead-pax").show(200);
        $(".lead-pax").find('input').removeAttr('disabled');
    } else {
        $(".lead-pax").hide(200);
        $(".lead-pax").find('input').attr('disabled', '');
    }
}

$(document).ready(function () {
    leadvalueChanged();
//while hovering dropdown can be focused//
    $('.cd-navigation li.dropdown span.caret-ico').on('click', function (e) {

        e.preventDefault();
        if ($(this).hasClass('down')) {
            $(this).removeClass('down');
            $(this).addClass('up');
            $(this).parent("li").children('.dropdown-menu').slideDown();
        } else {
            $(this).removeClass('up');
            $(this).addClass('down');
            $(this).parent("li").children('.dropdown-menu').slideUp();
        }
    });
//    side bar drawer scripts

    var $lateral_menu_trigger = $('#cd-menu-trigger'),
        $content_wrapper = $('.cd-main-content'),
        $navigation = $('header');
    //open-close lateral menu clicking on the menu icon
    $lateral_menu_trigger.on('click', function (event) {
        event.preventDefault();
        $lateral_menu_trigger.toggleClass('is-clicked');
        $navigation.toggleClass('lateral-menu-is-open');
        $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
            // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
            $('body').toggleClass('overflow-hidden');
        });
        $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');
        //check if transitions are not supported - i.e. in IE9
        if ($('html').hasClass('no-csstransitions')) {
            $('body').toggleClass('overflow-hidden');
        }
    });
    //close lateral menu clicking outside the menu itself
    $content_wrapper.on('click', function (event) {
        if (!$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span')) {
            $lateral_menu_trigger.removeClass('is-clicked');
            $navigation.removeClass('lateral-menu-is-open');
            $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                $('body').removeClass('overflow-hidden');
            });
            $('#cd-lateral-nav').removeClass('lateral-menu-is-open');
            //check if transitions are not supported
            if ($('html').hasClass('no-csstransitions')) {
                $('body').removeClass('overflow-hidden');
            }

        }
    });
    //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
    $('.item-has-children').children('a').on('click', function (event) {
        event.preventDefault();
        $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(100).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(100);
    });
//end of side bar drawer
    $('#quote').find('input').removeAttr('readonly');


//range slider
    $('input[type="range"]').rangeslider({
        // Feature detection the default is `true`.
        // Set this to `false` if you want to use
        // the polyfill also in Browsers which support
        // the native <input type="range"> element.
        polyfill: false,
        // Default CSS classes
        rangeClass: 'rangeslider',
        disabledClass: 'rangeslider--disabled',
        horizontalClass: 'rangeslider--horizontal',
        fillClass: 'rangeslider__fill',
        handleClass: 'rangeslider__handle',
        // Callback function
        onInit: function () {
            $rangeEl = this.$range;
            // add value label to handle
            var $handle = $rangeEl.find('.rangeslider__handle');
            var handleValue = '<div class="rangeslider__handle__value">' + this.value + '</div>';
            $handle.append(handleValue);

            // get range index labels

            var rangeLabels = this.$element.attr('labels');
            rangeLabels = rangeLabels.split(', ');

            // add labels
            $rangeEl.append('<div class="rangeslider__labels"></div>');
            $(rangeLabels).each(function (index, value) {

                $rangeEl.find('.rangeslider__labels').append('<span class="rangeslider__labels__label">' + value + '</span>');
            });
        },
        // Callback function
        onSlide: function (position, value) {
            var $handle = this.$range.find('.rangeslider__handle__value');
            $handle.text(this.value);
        },
        // Callback function
        onSlideEnd: function (position, value) {
        }
    });

});
//Scroll Header Sticky

var screen_width = $(window).width();
console.log("screen width=" + screen_width);
if (screen_width <= 992) {
    (function ($) {
        $(function () {
// scroll is still position
            var scroll = $(document).scrollTop();
            var headerHeight = $('.page-header').outerHeight();
            //console.log(headerHeight);

            $(window).scroll(function () {
// scrolled is new position just obtained
                var scrolled = $(document).scrollTop();
                // optionally emulate non-fixed positioning behaviour

                if (scrolled > headerHeight) {
                    $('.page-header').addClass('off-canvas');
                } else {
                    $('.page-header').removeClass('off-canvas');
                }

                if (scrolled > scroll) {
// scrolling down
                    $('.page-header').removeClass('fixed');
                } else {
//scrolling up
                    $('.page-header').addClass('fixed');
                }

                scroll = $(document).scrollTop();
            });
        });
    })(jQuery);
}

//dropdown style
$(".dropdown").on("show.bs.dropdown", function () {
    $(this).find(".dropdown-menu").first().stop(!0, !0).slideDown()
}), $(".dropdown").on("hide.bs.dropdown", function () {
    $(this).find(".dropdown-menu").first().stop(!0, !0).slideUp()
});
//One way Quote form
var max_fields = 3; //maximum input boxes allowed
var wrapper = $(".input_fields_wrap .row"); //Fields wrapper
var add_button = $(".show-via"); //Add button ID

var x = 0; //initlal text box count
$('.show-via').click(function (e) { //on add input button click
    e.preventDefault();
    if (x == max_fields) { //max input box allowed
        alert("You have reached the limit of adding " + x + " Via Points");
    } else {
        $(wrapper).append('' +
            '<div class="col-sm-12"><div class="add-field form-field">' +
            '<label for="drop_off">Add VIA</label>'+
            '<input name="stop_point[]" class="stop-add  form-control  way_point_address' +
            x +
            '" id="way_point" placeholder="VIA Point: Enter airport, hotel, address..." required=""><span class="way_point' +
            x +
            '"><input type="hidden" data-geo="lat" name="way_point_lat[]">' +
            '<input type="hidden" data-geo="lng" name="way_point_lng[]">' +
            '</span>' +
                '<span class="form-addons"><i class="fa fa-map-marker"></i></span>' +
            '<a href="#!" class="remove_field">' +
            '<i class="fa fa-times"></i>' +
            '</a>' +
            '</div>'); //add input box
        way_point(x);
        x++; //text box increment
    }

    e.preventDefault();
});
$(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
    e.preventDefault();
    $(this).parent('div').parent('div').remove();
    x--;
});

//way point function
function way_point(x) {
    $(".way_point_address" + x).geocomplete({
        country: 'uk',
        details: ".way_point" + x,
        detailsAttribute: "data-geo",
        types: ['geocode', 'establishment']
    });
}
//
// $(window).load(function () {
//     $('.loader').fadeOut(2000);
//
//     //slick slider
//     $('.ft-banner-slider').slick({
//         infinite: true,
//         speed: 500,
//         fade: true,
//         cssEase: 'linear',
//         autoplay: true,
//         autoplaySpeed: 2000,
//         arrows: false,
//     });
//     $('.ft-test').slick({
//         infinite: true,
//         arrows: false,
//         speed: 500,
//         fade: true,
//         cssEase: 'linear',
//         autoplay: true,
//         autoplaySpeed: 3500,
//         dots: false,
//         adaptiveHeight: true
//     });
//     $('.fleet-slider').slick({
//         arrows: true,
//         infinite: true,
//         autoplay: true,
//         dots: false,
//         autoplaySpeed: 1500,
//         slidesToShow: 5,
//         slidesToScroll: 1,
//         responsive: [
//             {
//                 breakpoint: 1024,
//                 settings: {
//                     slidesToShow: 3,
//                     slidesToScroll: 1,
//                 }
//             },
//             {
//                 breakpoint: 601,
//                 settings: {
//                     slidesToShow: 2,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 481,
//                 settings: {
//                     slidesToShow: 1,
//                     slidesToScroll: 1
//                 }
//             }
//             // You can unslick at a given breakpoint now by adding:
//             // settings: "unslick"
//             // instead of a settings object
//         ]
//     });
//     $('.client-slider').slick({
//         arrows: true,
//         infinite: true,
//         autoplay: true,
//         autoplaySpeed: 1500,
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         responsive: [
//             {
//                 breakpoint: 1200,
//                 settings: {
//                     slidesToShow: 2,
//                     slidesToScroll: 1,
//                     infinite: true,
//                 }
//             },
//             {
//                 breakpoint: 768,
//                 settings: {
//                     slidesToShow: 1,
//                     slidesToScroll: 1
//                 }
//             }
//             // You can unslick at a given breakpoint now by adding:
//             // settings: "unslick"
//             // instead of a settings object
//         ]
//     });
//     var slider2 = $('.quote-vehicle-sliders').slick({
//         slidesToShow: 2,
//         slidesToScroll: 1,
//         dots: false,
//         arrows: true,
//         speed: 500,
//         cssEase: 'linear',
// //        infinite: false,
//         responsive: [
//             {
//                 breakpoint: 1024,
//                 settings: {
//                     slidesToShow: 3,
//                     slidesToScroll: 1,
//                 }
//             },
//             {
//                 breakpoint: 744,
//                 settings: {
//                     slidesToShow: 2,
//                     slidesToScroll: 1
//                 }
//             },
//             {
//                 breakpoint: 481,
//                 settings: {
//                     slidesToShow: 1,
//                     slidesToScroll: 1
//                 }
//             }
//             // You can unslick at a given breakpoint now by adding:
//             // settings: "unslick"
//             // instead of a settings object
//         ]
//     });
//
//
//     $(slider2).on('afterChange', function (event, slick, currentSlide) {
//         console.log(slick, currentSlide);
//         if (slick.$slides.length - 1 == currentSlide) {
//             console.log("Last slide");
//         }
//         if (slick.$slides.length - 6 == currentSlide) {
//             console.log("8 slide");
//             slider2.slick('slickGoTo', 1);
//
//         }
//     });
//     $('.view-trip-details').click(function () {
//         $('.trip-details').slideToggle();
//         if ($(this).text() == "Hide Journey Details") {
//             $(this).text("View Journey Details");
//         } else {
//             $(this).text("Hide Journey Details");
//         }
//         ;
//     });
//
// });
jQuery(function () {

    var minimized_elements = $('p.minimize');

    minimized_elements.each(function () {
        var t = $(this).html();
        if (t.length < 300) return;

        $(this).html(
            t.slice(0, 300) + '<span>... </span><a href="#" class="more">Read More</a>' +
            '<span style="display:none;">' + t.slice(100, t.length) + ' <a href="#" class="less">Read Less</a></span>'
        );

    });

    $('a.more', minimized_elements).click(function (event) {
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();
    });

    $('a.less', minimized_elements).click(function (event) {
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();
    });

});
// $(document).ready(function() {
//     var showChar = 300;
//     var ellipsestext = "...";
//     var moretext = "Show more >";
//     var lesstext = "Show less";
//
//
//     $('.more').each(function() {
//         var content = $(this).html();
//
//         if(content.length < showChar) {
//
//             var c = content.substr(0, showChar);
//             var h = content.substr(showChar, content.length - showChar);
//
//             var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
//
//             $(this).html(html);
//         }
//
//     });
//
//     $(".morelink").click(function(){
//         if($(this).hasClass("less")) {
//             $(this).removeClass("less");
//             $(this).html(moretext);
//         } else {
//             $(this).addClass("less");
//             $(this).html(lesstext);
//         }
//         $(this).parent().prev().toggle();
//         $(this).prev().toggle();
//         return false;
//     });
// });