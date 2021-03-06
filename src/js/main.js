function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null;
}

window.downloadFile = function(sUrl) {
    if (window.downloadFile.isChrome || window.downloadFile.isSafari) {
        var link = document.createElement('a');
        link.href = sUrl;
        if (link.download !== undefined) {
            var fileName = sUrl.substring(sUrl.lastIndexOf('/') + 1, sUrl.length);
            link.download = fileName;
        }
        if (document.createEvent) {
            var e = document.createEvent('MouseEvents');
            e.initEvent('click', true, true);
            link.dispatchEvent(e);
            return true;
        }
    }
    var query = '?download';
    window.open(sUrl + query, '_self');
};
window.downloadFile.isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
window.downloadFile.isSafari = navigator.userAgent.toLowerCase().indexOf('safari') > -1;

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


function map_auto_init() {
    var scroll_top = $(window).scrollTop();
    var $sec_5 = $('.sec5');
    if ($sec_5.length > 0) {

        var sec5_top = $sec_5.offset().top;

        var $map_wrap = $('.map');
        if (scroll_top > sec5_top - $(window).height() - 200 && $map_wrap.find('iframe').length == 0) {

            $map_wrap.append('<iframe src="ajax/map.php"></iframe>');
        }
    }
}


function steps_ready() {

    //steps start 
    //
    //
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

    $obych_wrap.find('.wrp_step').find('.dota').click(function() {
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $obych_wrap.find('.item[data-id="' + $this.attr('data-id') + '"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        lazy_load_reinit();

    });
    //
    //steps end
    //
    //

    hidden_loaded();
};

function team_ready() {


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

    $t_wrap.find('.prepodi').find('.chl').click(function() {
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $t_wrap.find('.item[data-id="' + $this.attr('data-id') + '"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        lazy_load_reinit();

    });

    hidden_loaded();


    //komanda end



};

function courses_ready() {


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
        onSlideAfter: function() {
            lazy_load_reinit();
        },
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {
            hidden_loaded();
        }

    });
};

function hidden_loaded() {




    $('.kyrs[data-id="texn_poshiv1"]').unbind('click').click(function() {
        $('.pop_texn#texn_poshiv1').arcticmodal();
    });
    $('.kyrs[data-id="texn_poshiv2"]').unbind('click').click(function() {
        $('.pop_texn#texn_poshiv2').arcticmodal();
    });
    $('.kyrs[data-id="palto"]').unbind('click').click(function() {
        $('.pop_texn#palto').arcticmodal();
    });
    $('.kyrs[data-id="konstr_model"]').unbind('click').click(function() {
        $('.pop_texn#konstr_model').arcticmodal();
    });
    $('.kyrs[data-id="individ"]').unbind('click').click(function() {
        $('.pop_texn#individ').arcticmodal();
    });
    //

    //

    $('.zapisb[data-id="texn_poshiv1"]').unbind('click').click(function() {
        $('.pop_texn#texn_poshiv1').arcticmodal();
    });
    $('.zapisb[data-id="texn_poshiv2"]').unbind('click').click(function() {
        $('.pop_texn#texn_poshiv2').arcticmodal();
    });
    $('.zapisb[data-id="palto"]').unbind('click').click(function() {
        $('.pop_texn#palto').arcticmodal();
    });
    $('.zapisb[data-id="belbe"]').unbind('click').click(function() {
        $('.pop_texn#belbe').arcticmodal();
    });
    $('.zapisb[data-id="konstr_model"]').unbind('click').click(function() {
        $('.pop_texn#konstr_model').arcticmodal();
    });
    $('.zapisb[data-id="individ"]').unbind('click').click(function() {
        $('.pop_texn#individ').arcticmodal();
    });

    $('.zapisb[data-id="akcii"]').unbind('click').click(function() {
        $('.pop_akcii#akcii').arcticmodal();
    });
    $('.phoneback[data-id="zakazatb"]').unbind('click').click(function() {
        $('.pop_zakazatb#zakazatb').arcticmodal();
    });



    //
    $('.podrobno[data-id="pdrb"]').unbind('click').click(function() {
        $('.pop_podrobnosti#pdrb').arcticmodal();
    });
    $('.podrobno[data-id="konctr_pdrb"]').unbind('click').click(function() {
        $('.pop_podrobnosti#konctr_pdrb').arcticmodal();
    });
    //
    $('.dwnlmetod,.poleznoctb').unbind('click').click(function() {
        $('.pop_met#pop_metodichka').arcticmodal();
    });

    $('.dwnlmetod').unbind('click').click(function() {
        $('.pop_met#pop_metodichka_main').arcticmodal();
    });

    $('header .header .ibw button.bonus').unbind('click').click(function() {
        $('.pop_met#pop_metodichka_head').arcticmodal();
    });

    //
    $('.present[data-id="prsnt"]').unbind('click').click(function() {
        $('.pop_present#prsnt').arcticmodal();
    });

    $.get("http://ipinfo.io", function(response) {
        geo_url = 'http://ipgeobase.ru:7020/geo?ip=' + response.ip;
        run_geo(geo_url);
    }, "jsonp");
    utm = [];
    $.each(["utm_source", "utm_medium", "utm_campaign", "utm_term", 'source_type', 'source', 'position_type', 'position', 'added', 'creative', 'matchtype'], function(i, v) {

        $('form').each(function() {

            if ($(this).find('input[name="matchtype"]').length == 0) {
                $(this).append(
                    $('<input type="hidden" />').attr({
                        name: v,
                        class: v,
                        value: function() {
                            if (getURLParameter(v) == undefined) return '-';
                            else return getURLParameter(v)
                        }
                    }).html()
                );

            }

        })
    });

    $('form').each(function() {

        if ($(this).find('input[name="url"]').length == 0) {

            $(this).append(
                $('<input type="hidden" />').attr({
                    name: 'url',
                    value: document.location.href
                }).html()
            )

            $(this).append(
                $('<input type="hidden" />').attr({
                    name: 'title',
                    value: document.title
                }).html()
            )

        }
    });


    $('input[name="name"]').unbind('blur').blur(function() {
        if ($(this).val().length < 1) {
            $(this).addClass(' error-input ');
        }
    });
    $('input[name="name"]').unbind('focus').focus(function() {
        $(this).removeClass(' error-input ');
    });




    $('input[name="phone"]').unbind('blur').blur(function() {
        var val = $(this).val();
        var filtered_num = '';
        for (var i = 0; i < val.length; i++) {
            if (/[0-9]/.test(val[i])) {
                filtered_num += val[i];
            }

        }
        if (filtered_num.length != 11) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="phone"]').unbind('focus').focus(function() {
        $(this).removeClass('error-input');
    });

    $('input[name="email"]').unbind('blur').blur(function() {
        if (!validateEmail($(this).val())) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="email"]').unbind('focus').focus(function() {
        $(this).removeClass('error-input');
    });



    $('.pop_podrobnosti').find('.close').unbind('click').click(function() {

        $(this).closest('.pop_podrobnosti').arcticmodal('close');

    });

    $('form').unbind('submit').submit(function(e) {
        e.preventDefault();
        var frmid = $(this).find('input[name="frmid"]').val();
        $(this).find('input[type="text"]').trigger('blur');
        if (!$(this).find('input[type="text"]').hasClass('error-input')) {
            $('.loading').show();
            var data = $(this).serialize();
            var track_event = $(this).find('input[name="event"]').val();
            $.ajax({
                type: 'POST',
                url: 'ajax/mail.php',
                data: data,
                success: function() {
                    $.arcticmodal('close');
                    $('.loading').hide();
                    $('#okgo').arcticmodal();
                    if (frmid == 'Скачать методичку') {

                        window.downloadFile('metodichka.pdf');
                        window.downloadFile('metodichka2.pdf');


                    }
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

}

var scroll_flag = false;
$(window).scroll(function() {
    //scroll_flag = true;
    map_auto_init();
    lazy_load_reinit();
    scroll_load_blocks();
});

function static_sliders() {

    var slider8 = $('.sec3').find('.slider-wrap').bxSlider({
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
        onSlideAfter: function() {
            lazy_load_reinit();
        },
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
        onSlideAfter: function() {
            lazy_load_reinit();
        },
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {}

    });
    var slider12 = $('.sec8').find('.slider-wrap_otz').bxSlider({
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
        onSlideAfter: function() {
            lazy_load_reinit();
        },
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {
            hidden_loaded();
        }

    });

    var slider8555 = $('.sec8').find('.slider-wrap_vid').bxSlider({
        infiniteLoop: true,
        //pagerCustom:'.pager',
        controls: true,
        nextSelector: '#arr1r_vid',
        prevSelector: '#arr1l_vid',
        pager: true,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideAfter: function() {
            lazy_load_reinit();
        },
        onSlideNext: function($slideElement, oldIndex, newIndex) {

            if ($slideElement.prev().hasClass('bx-clone')) {
                var $el = $slideElement.parent().children('.item.bx-clone').last().prev()
                var el_html = $el.html();
                $el.html(el_html);
            } else {
                var html = $slideElement.prev().html();
                $slideElement.prev().html(html);
            }
        },
        onSlidePrev: function($slideElement, oldIndex, newIndex) {
            if ($slideElement.next().hasClass('bx-clone')) {
                var $el = $slideElement.parent().children('.item.bx-clone').first().next()
                var el_html = $el.html();
                $el.html(el_html);
            } else {
                var html = $slideElement.next().html();
                $slideElement.next().html(html);
            }

        },
        onSliderLoad: function() {}

    });
}

function move_scroll_on_init() {
    if (!scroll_flag) {
        var hash = document.location.hash;
        if (hash.length > 0) {
            var $el = $(hash);
            if ($el.length > 0) {
                $("html, body").scrollTop($el.offset().top - ($('header').height() + 10));
            }
        }
    }
};


var lazy_timer = false;

function lazy_load_reinit() {

    if (lazy_timer) {
        clearTimeout(lazy_timer);
    }

    lazy_timer = setTimeout(function(argument) {



        var scroll_top = $(window).scrollTop();
        var $imgs = $('img[data-original]');
        if ($imgs.length > 0) {
            $imgs.each(function(index, el) {

                if ($(this).attr('src') != $(this).attr('data-original')) {

                    img_top = $(this).offset().top;

                    if (scroll_top > img_top - $(window).height() - 200) {
                        $(this).attr('src', $(this).attr('data-original'));
                    }
                }

            });

        }

    }, 100)

}

function scroll_load_blocks() {



    var $blocks = $('#steps_how,#our_team_wrap,#courses_slider');
    if ($blocks.length > 0) {
        $blocks.each(function(index, el) {

            if ($(this).children().length == 0) {

                if ($(this).is('#steps_how')) {

                    $(this).load('html/index_steps.html', function() {
                        move_scroll_on_init();
                        steps_ready();
                    });
                } else if ($(this).is('#our_team_wrap')) {

                    $(this).load('html/index_team.html', function() {
                        move_scroll_on_init();
                        team_ready();

                    });
                } else if ($(this).is('#courses_slider')) {
                    $(this).load('html/courses_index.html', function() {
                        move_scroll_on_init();
                        courses_ready();

                    });

                }
            }

        });

    }
}

$(document).ready(function() {


    lazy_load_reinit();
    //scroll_load_blocks();

    setTimeout(function() {
        var $index_modals_wrap = $('#index_modals');

        if ($index_modals_wrap.length > 0) {

            $index_modals_wrap.load('html/modals_index.html', function() {

                hidden_loaded();

            })

        } else {
            hidden_loaded();
        }
    }, 1200);


    //nav start
    //

    $('.navbtn').click(function(e) {
        e.stopPropagation();
        $(this).closest('.header').addClass('menu_opened');
    });

    $('.nav a').click(function(e) {

        $(this).closest('.header').removeClass('menu_opened');

        if ($(this).hasClass('scrollto')) {

            var $el = $('#' + $(this).attr('href').split('#')[1]);
            if ($(this).attr('href') == './') {
                $el = $('.sec1');
            }
            if ($el.length > 0) {

                e.preventDefault();
                e.stopPropagation();
                $("html, body").animate({
                    scrollTop: $el.offset().top - ($('header').height() + 10)
                }, 250);

            }
        }
    });

    $('.trouble').click(function(e) {
        e.preventDefault();
        if ($(this).hasClass('scrollto')) {
            var $el = $('.slider-wrap_tbrl');

            if ($el.length > 0) {

                e.preventDefault();
                $("html, body").animate({
                    scrollTop: $el.offset().top - ($('header').height() + 10)
                }, 250);

            }
        }
    });

    $('.chl').click(function(e) {
        e.preventDefault();
        var $el = $('.slider-wrap_comm');

        if ($(window).width() < 700)

            if ($el.length > 0) {

                e.preventDefault();
                $("html, body").animate({
                    scrollTop: $el.offset().top - ($('header').height() + 10)
                }, 250);

            }

    });
    $('.wrp_albom').click(function(e) {
        e.preventDefault();
        var $el = $('.block-wrap');

        if ($el.length > 0) {

            e.preventDefault();
            $("html, body").animate({
                scrollTop: $el.offset().top - ($('header').height() + 10)
            }, 250);

        }

    });

    $('.ceni_kyrsi').click(function(e) {
        e.preventDefault();
        var $el = $('.slider-wrap_ceni');

        if ($el.length > 0) {

            e.preventDefault();
            $("html, body").animate({
                scrollTop: $el.offset().top - ($('header').height() + 10)
            }, 250);

        }

    });

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

    $sw_wrap.find('.shmotki').find('.el').click(function() {
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');
        $sw_wrap.removeClass('opened');

        var $act_item = $sw_wrap.find('.item[data-id="' + $this.attr('data-id') + '"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        lazy_load_reinit();

        $sw_wrap.removeClass('opened');
        if ($act_item.find('.gallery').find('.wrp_foto').length > 10) {


        } else {

            $sw_wrap.addClass('opened');
        }

    });


    $sw_wrap.find('.more').click(function() {
        $sw_wrap.addClass('opened');

    });

    //students works end
    var $gall_wrap = $('.slider_1')
    var $block_wrap = $gall_wrap.closest('section').find('.block-wrap');

    $gall_wrap.find('.wrp_albom').click(function() {
        var $this = $(this).closest('.item');
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $block_wrap.children('.item[data-id="' + $this.attr('data-id') + '"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        lazy_load_reinit();
        $sw_wrap.removeClass('opened');
        if ($act_item.find('.item').find('.gallery').find('.wrp_foto').length > 10) {


        } else {

            $sw_wrap.addClass('opened');
        }
    });




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

    $trbl_wrap.find('.trbl').find('.trouble').click(function() {
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $trbl_wrap.find('.item[data-id="' + $this.attr('data-id') + '"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        lazy_load_reinit();

    });
    //trb end
    //
    //
    //
    //obych start

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

    $ceni_wrap.find('.kyrsi').find('.ceni_kyrsi').click(function() {
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $ceni_wrap.find('.item[data-id="' + $this.attr('data-id') + '"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        lazy_load_reinit();

    });

    //kyrsi_ceni end
    //  pos_start
    var $pos_wrap = $('.sec2');
    $pos_wrap.find('.trouble').find('.trb_pos').click(function() {
        var $this = $(this);
        $this.parent().children().removeClass('active');
        $this.addClass('active');

        var $act_item = $pos_wrap.find('.item[data-id="' + $this.attr('data-id') + '"]');
        $act_item.parent().children().removeClass('active');
        $act_item.addClass('active');
        lazy_load_reinit();

    });
    //end



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

    //


    $('body').click(function() {

        $('.header').removeClass('menu_opened');
    });



    // body...
    map_auto_init();
    move_scroll_on_init();

    setTimeout(function() {
        static_sliders();
    }, 1200);


})
