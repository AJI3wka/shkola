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


    $('.kyrs,.dwnlmetod,.zapisb,.bonus').click(function() {
        $('.pop_z').arcticmodal();
    });


    //nav start
    $('.nav a').click(function(e) {

        if ($(this).hasClass('scrollto')) {
            var $el = $('#'+$(this).attr('href').split('#')[1]);
            if ($(this).attr('href') == './') {
                $el = $('.sec1');
            }
            if ($el.length>0) {

                e.preventDefault();
                $("html, body").animate({
                    scrollTop: $el.offset().top - 70
                }, 500);

            }
        }
    });
    !function move_scroll_on_init(){
        var hash = document.location.hash;
        if (hash.length>0) {
            var $el = $(hash);
            if ($el.length>0) {
                $("html, body").scrollTop($el.offset().top - 70);
            }
        }
    }();
    //nav end



    //students works start
    var $sw_wrap = $('.students_works')

    $sw_wrap.find('.slide-control_gal').find('#arr1l,#arr1r').click(function() {
        var $active = $sw_wrap.find('.shmotki').find('.el.active');
        $active.removeClass('active');
        if ($(this).is('#arr1l')) {
            if ($active.prev().length > 0) {
                $active.prev().trigger('click');
            } else {
                $active.parent().children().last().trigger('click');
            }
        } else {
            if ($active.next().length > 0) {
                $active.next().trigger('click');
            } else {
                $active.parent().children().first().trigger('click');
            }
        }
    });

    $sw_wrap.find('.shmotki').find('.el').click(function(){
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');
        $sw_wrap.removeClass('opened');

        var $act_item = $sw_wrap.find('.item[data-id="'+$this.attr('data-id')+'"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        
    });


    $sw_wrap.find('.more').click(function(){
        $sw_wrap.addClass('opened');

    });

    //students works end




    //komanda start
    var $t_wrap = $('.sec4');

    $t_wrap.find('.slide-control').find('#arr1l_comm,#arr1r_comm').click(function() {
        var $active = $t_wrap.find('.prepodi').find('.chl.active');
        $active.removeClass('active');
        if ($(this).is('#arr1l_comm')) {
            if ($active.prev().length > 0) {
                $active.prev().trigger('click');
            } else {
                $active.parent().children().last().trigger('click');
            }
        } else {
            if ($active.next().length > 0) {
                $active.next().trigger('click');
            } else {
                $active.parent().children().first().trigger('click');
            }
        }
    });

    $t_wrap.find('.prepodi').find('.chl').click(function(){
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $t_wrap.find('.item[data-id="'+$this.attr('data-id')+'"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        
    });



     //komanda end
  
    //trbl start
    var $trbl_wrap = $('.sec3');

    $trbl_wrap.find('.slide-control').find('#arr1l_trbll,#arr1r_trbll').click(function() {
        var $active = $trbl_wrap.find('.trbl').find('.trouble.active');
        $active.removeClass('active');
        if ($(this).is('#arr1l_trbll')) {
            if ($active.prev().length > 0) {
                $active.prev().trigger('click');
            } else {
                $active.parent().children().last().trigger('click');
            }
        } else {
            if ($active.next().length > 0) {
                $active.next().trigger('click');
            } else {
                $active.parent().children().first().trigger('click');
            }
        }
    });

    $trbl_wrap.find('.trbl').find('.trouble').click(function(){
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $trbl_wrap.find('.item[data-id="'+$this.attr('data-id')+'"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        
    });
    //trb end
    //
    //
    //
    //obych start
    var $obych_wrap = $('.sec2');

    $obych_wrap.find('.slide-control').find('#arr1l_obych,#arr1r_obych').click(function() {
        var $active = $obych_wrap.find('.wrp_step').find('.dota.active');
        $active.removeClass('active');  
        if ($(this).is('#arr1l_obych')) {
            if ($active.prev().length > 0) {
                $active.prev().trigger('click');
            } else {
                $active.parent().children().last().trigger('click');
            }
        } else {
            if ($active.next().length > 0) {
                $active.next().trigger('click');
            } else {
                $active.parent().children().first().trigger('click');
            }
        }
    });

    $obych_wrap.find('.wrp_step').find('.dota').click(function(){
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $obych_wrap.find('.item[data-id="'+$this.attr('data-id')+'"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        
    });
    //trb end
    //
    
    //
    //kyrsi_ceni start
    var $ceni_wrap = $('.sec7');

    $ceni_wrap.find('.slide-control').find('#arr1l_ceni,#arr1r_ceni').click(function() {
        var $active = $ceni_wrap.find('.kyrsi').find('.ceni_kyrsi.active');
        $active.removeClass('active');
        if ($(this).is('#arr1l_ceni')) {
            if ($active.prev().length > 0) {
                $active.prev().trigger('click');
            } else {
                $active.parent().children().last().trigger('click');
            }
        } else {
            if ($active.next().length > 0) {
                $active.next().trigger('click');
            } else {
                $active.parent().children().first().trigger('click');
            }
        }
    });

    $ceni_wrap.find('.kyrsi').find('.ceni_kyrsi').click(function(){
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $ceni_wrap.find('.item[data-id="'+$this.attr('data-id')+'"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        
    });
    //kyrsi_ceni end
    //  pos_start
        var $pos_wrap = $('.sec2');
        $pos_wrap.find('.trouble').find('.trb_pos').click(function(){
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $pos_wrap.find('.item[data-id="'+$this.attr('data-id')+'"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active'); 
        
    });
    //end


    var slider2 = $('.sec8').find('.slider-wrap').bxSlider({
        infiniteLoop: true,
        // pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_trbll',
        prevSelector: '#arr1r_trbll',
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

    var slider9 = $('.sec7').find('.slider-wrap').bxSlider({
        infiniteLoop: true,
        // pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_ceni',
        prevSelector: '#arr1r_ceni',
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
    var slider3 = $('.sec3').find('.slider-wrap').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_trbl',
        prevSelector: '#arr1l_trbl',
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
   /* var slider10 = $('.sec2').find('.slider-wrap_obych').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_obych',
        prevSelector: '#arr1l_obych',
        pager: false,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {}

    });*/
   
    
    var slider7 = $('.sec5').find('.slider-wrap_type').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_type',
        prevSelector: '#arr1l_type',
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