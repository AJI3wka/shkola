function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null;
}

function run_geo(geo_url) {
    $.ajax({
        type: 'GET',
        url: geo_url,
        dataType: 'xml',
        success: function(xml) {
            $(xml).find('ip').each(function() {
                var city = $(this).find('city').text();
                var region = $(this).find('region').text();
                if (city != region) {
                    var ipg = city + ', ' + region;
                } else {
                    var ipg = city;
                }
                $('<input type="hidden" />').attr({
                    name: 'location',
                    class: 'location',
                    value: ipg
                }).appendTo("form");
            });
        }
    });
}


function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
};






$(document).ready(function() {





    $.get("http://ipinfo.io", function(response) {
        geo_url = 'http://ipgeobase.ru:7020/geo?ip=' + response.ip;
        run_geo(geo_url);
    }, "jsonp");
    utm = [];
    $.each(["utm_source", "utm_medium", "utm_campaign", "utm_term", 'source_type', 'source', 'position_type', 'position', 'added', 'creative', 'matchtype'], function(i, v) {
        $('<input type="hidden" />').attr({
            name: v,
            class: v,
            value: function() {
                if (getURLParameter(v) == undefined) return '-';
                else return getURLParameter(v)
            }
        }).appendTo("form")
    });
    $('<input type="hidden" />').attr({
        name: 'url',
        value: document.location.href
    }).appendTo("form");
    $('<input type="hidden" />').attr({
        name: 'title',
        value: document.title
    }).appendTo("form");

    $('.nav a').click(function(e) {

        if ($(this).hasClass('scrollto')) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: $($(this).attr('href')).offset().top - 62
            }, 2000);
        }
    });

    $('.map').append('<iframe src="ajax/map.html"></iframe>');

    $('input[name="name"]').blur(function() {
        if ($(this).val().length < 2) {
            $(this).addClass(' error-input ');
        }
    });
    $('input[name="name"]').focus(function() {
        $(this).removeClass(' error-input ');
    });




    $('input[name="phone"]').mask('+7 (999) 999-99-99');
    $('input[name="phone"]').blur(function() {
        if ($(this).val().length != 18) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="phone"]').focus(function() {
        $(this).removeClass('error-input');
    });

    $('input[name="email"]').blur(function() {
        if (!validateEmail($(this).val())) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="email"]').focus(function() {
        $(this).removeClass('error-input');
    });


    $('.kyrs,.dwnlmetod,.shema').click(function() {
        $('.pop_z').show('#okgo').arcticmodal();
    });


    $('.slide-control_gal').find('#arr1l,#arr1r').click(function() {
        var $active = $('.shmotki').find('.el.active');
        $active.removeClass('active');
        if ($(this).is('#arr1l')) {
            if ($active.prev().length > 0) {
                $active.prev().addClass('active');
            } else {
                $active.parent().children().last().addClass('active');
            }
        } else {
            if ($active.next().length > 0) {
                $active.next().addClass('active');
            } else {
                $active.parent().children().first().addClass('active');
            }
        }
    });



    /*var slider1 = $('.').find('.wrp_fts').bxSlider({

    infiniteLoop: true,
    nextSelector:'#sld2r',
    prevSelector:'#sld2l',
    controls: false,
    pager:true,
    pagerCustom:'#slider_1_control',
    auto: false,
    speed: 500,
    minSlides: 1,
    maxSlides: 1,
    moveSlides: 1
    });*/

    var slider2 = $('.sec8').find('.slider-wrap').bxSlider({
        infiniteLoop: true,
        // pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r',
        prevSelector: '#arr1l',
        pager: false,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {}

    });
    var slider3 = $('.sec4').find('.slider-wrap').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r',
        prevSelector: '#arr1l',
        pager: true,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {}

    });
    var slider4 = $('.sec8').find('.slider-wrap_otz').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_otz',
        prevSelector: '#arr1l_otz',
        pager: false,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {}

    });
    var slider5 = $('.sec10').find('.slider-wrap_shmot').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_otz',
        prevSelector: '#arr1l_otz',
        pager: false,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {}

    });
    var slider6 = $('.sec4').find('.slider-wrap_comm').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_comm',
        prevSelector: '#arr1l_comm',
        pager: false,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {}

    });



    $('.fancy').fancybox({
        maxWidth: '90%',
        maxHeight: '90%',
        padding: 0,
        helpers: {
            overlay: {
                locked: false
            },
            title: null
        },
        afterShow: function() {
            $('.fancybox-wrap').swipe({
                swipe: function(event, direction) {
                    if (direction === 'left') {
                        $.fancybox.prev(direction);
                    }
                    if (direction === 'right') {
                        $.fancybox.next(direction);
                    }
                }
            });
        }
    });



    $('form').submit(function(e) {
        e.preventDefault();
        $(this).find('input[type="text"]').trigger('blur');
        if (!$(this).find('input[type="text"]').hasClass('error-input')) {
            var type = $(this).attr('method');
            var url = $(this).attr('action');
            var data = $(this).serialize();
            var track_event = $(this).find('input[name="event"]').val();
            $.ajax({
                type: type,
                url: url,
                data: data,
                success: function() {
                    $.arcticmodal('close');
                    $('#okgo').arcticmodal();
                    //submit_track_event(track_event);
                }
            });
        } else {

            var eror_pop_text = '';

            if ($(this).find('input[name="name"]').hasClass('error-input') && !$(this).find('input[name="phone"]').hasClass('error-input') && !$(this).find('input[name="email"]').hasClass('error-input')) {
                eror_pop_text = 'Пожалуйста введите имя';
            } else

            if ($(this).find('input[name="phone"]').hasClass('error-input') && !$(this).find('input[name="name"]').hasClass('error-input') && !$(this).find('input[name="email"]').hasClass('error-input')) {
                eror_pop_text = 'Пожалуйста введите телефон';
            } else

            if ($(this).find('input[name="phone"]').hasClass('error-input') && $(this).find('input[name="name"]').hasClass('error-input') && !$(this).find('input[name="email"]').hasClass('error-input')) {
                eror_pop_text = 'Пожалуйста введите имя и телефон';
            }

            if ($(this).find('input[name="name"]').hasClass('error-input') && !$(this).find('input[name="phone"]').hasClass('error-input') && $(this).find('input[name="email"]').hasClass('error-input')) {
                eror_pop_text = 'Пожалуйста введите имя и email';
            } else

            if ($(this).find('input[name="phone"]').hasClass('error-input') && !$(this).find('input[name="name"]').hasClass('error-input') && $(this).find('input[name="email"]').hasClass('error-input')) {
                eror_pop_text = 'Пожалуйста введите телефон и email';
            } else

            if ($(this).find('input[name="phone"]').hasClass('error-input') && $(this).find('input[name="name"]').hasClass('error-input') && $(this).find('input[name="email"]').hasClass('error-input')) {
                eror_pop_text = 'Пожалуйста введите имя, email и телефон';
            }


            $('#form-error-text').html(eror_pop_text)
            $('#form-error-pop').arcticmodal();
        }

    });



})