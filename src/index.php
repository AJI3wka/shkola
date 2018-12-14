<?php include('ajax/amo_helper.php'); ?>
<!DOCTYPE html>
<html lang="ru">
    <meta id="viewport" name="viewport" content="width=device-width">
    <head>
        
        <?php include('html/meta.html'); ?>
        <script src="http://localhost:1985/livereload.js"></script>
        <link rel="stylesheet" href="css/libs.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/scripts.css">
        
        <!-- блок статического и динамического критического css не удалять -->
        <!--<style>
        <?php include('css/head.css'); ?>
        </style>-->
    </head>
    <body>
        
        <?php include('html/header.php'); ?>
        <section class="sec1">
            <div>
                <div class="logo"></div>
                <div class="wrap">
                    <div class="information">
                        <div class="adress">
                            <p class="txt">Адрес:</p>
                            <p class="ad"><?php $text = file_get_contents('settings/adr.txt'); echo(str_replace(PHP_EOL, "<br>", $text)); ?></p>
                        </div>
                    </div>
                    <div class="soc">
                        <p class="h3">Социальные сети:</p>
                        <a href="<?php include('settings/vk.txt') ?>" class="vk" target="_blank"></a>
                        <a  href="<?php include('settings/insta.txt') ?>" class="inst" target="_blank"></a>
                        <p class="gskw">#ЖШКШ</p>
                    </div>
                </div>
                <div class="school_l">
                    <div class="wnyr"></div>
                    <h3>Женская школа <br>кройки и шитья</h3>
                    <div class="sch_txt">
                        <p class="new">Школа шитья для начинающих.</p>
                        <p class="smtxt">Научим професcиональному шитью<br> и созданию эксклюзивной одежды<br> по вашим меркам</p>
                        <div class="machine">
                            <div class="wrp_machine">
                                <p class="free">Посетите одно занятие бесплатно.</p>
                                <p class="txtsm">Урок не вводный и не теоретический.<br>На пробном занятии вы уже будете<br> шить на швейных машинках</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="school_r">
                    <form class="form"  action="#" method="get">
                        <p class="xotite">Хотите записаться <br> <span class="bl">на</span> <span class="pink">бесплатное занятие?</span></p>
                        <div class="zajavka">Оставьте заявку, и мы свяжемся с вами. </div>
                        <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                        <input type="text" name="phone" class="input" placeholder="Телефон">
                        <input type="hidden" name="frmid" value="Форма в шапке">
                        <button class="frm" id="">Оставить заявку</button>
                    </form>
                </div>
            </div>
        </section>
        <section  class="sec2">
            <div>
                <h2>Полезный бонус</h2>
                <div class="bonus_l">
                    <div class="wrp_met">
                        <p class="forme">Как выбрать<br>
                        швейную машинку для себя ?</p>
                        <p class="formetxt">Мы знаем, что новичкам сложно учесть все нюансы
                            при покупке швейной машинки, поэтому разработали для вас
                            специальную методичку. Она сэкономит ваше времяи средства,
                            а еще поможет разобраться в тонкостях швейного дела.<br><br>
                            <span class="fin">В конце мы поместили промокод — скидку 5% и 25%<br>
                            на товары швейного магазина «ТекстильТорг».</span>
                        </p>
                    </div>
                </div>
                <div class="bonus_r">
                    <div class="wrp_met">
                        <p class="tkanb">Какую ткань выбрать?<br>Разбираемся в материалах для шитья</p>
                        <p class="tkanbtxt">Мы также уделили особое внимание теме тканей. В этой сфере
                            настоящий бардак, в котором сложно разобраться самому.
                            Давайте разбираться вместе. В методичке собраны основные виды
                            тканей с практическими советами и рекомендациями по выбору.<br>
                            <span class="fin">Дочитайте до концам — там ждут приятные
                            бонусы от наших партнеров.</span> 
                        </p>
                    </div>
                </div>
                <div class="dyg_wrp">
                    <div class="dyga"></div>
                    <button class="dwnlmetod">
                    Скачать две методички
                    </button>
                </div>
                <div class="how">Как проходить обучение<br> в #ЖШКШ</div>
                <div class="wrp_how">
                    <div class="how_txt">Женская школа кройки и шитья — это не отдельные курсы,<br>
                        где вас научат шить кардиган за час. Это профессиональная школа<br>
                        для девушек с углубленным изучением швейного дела. С нами<br>
                        вы освоите новое хобби, сможете одевать себя и свою семью без<br>
                        лишних вложений, найдете, в конце концов, единомышленников.<br>
                    Но обо всем по порядку.</div>
                </div>
                <div class="wrp_step">
                    <div class="dyga"></div>
                    <div class="d-wrap">
                        
                        <div class="dota active punkt1" data-id="1">
                            <div class="step">1</div>
                            <p class="steptxt">Оставьте заявку</p>
                        </div>
                        <div class="dota punkt2" data-id="2">
                            <div class="step">2</div>
                            <p class="steptxt">Пробное
                            <br> занятие</p>
                        </div>
                        <div class="dota punkt3" data-id="3">
                            <div class="step">3</div>
                            <p class="steptxt">Практическая
                            <br>вводная часть</p>
                        </div>
                        <div class="dota punkt4" data-id="4">
                            <div class="step">4</div>
                            <p class="steptxt">Пошив
                            <br> юбки</p>
                        </div>
                        <div class="dota punkt5" data-id="5">
                            <div class="step">5</div>
                            <p class="steptxt">Пошив брюк
                            <br> или блузки</p>
                        </div>
                        <div class="dota punkt6" data-id="6">
                            <div class="step">6</div>
                            <p class="steptxt">Пошив
                            <br> платья</p>
                        </div>
                        <div class="dota punkt7" data-id="7">
                            <div class="step">7</div>
                            <p class="steptxt">Подарочная
                            <br>фотосессия</p>
                        </div>
                        <div class="dota punkt8" data-id="8">
                            <div class="step">8</div>
                            <p class="steptxt">Перспективы</p>
                        </div>
                    </div>
                </div>
                <div class="slider10">
                    <div class="slide-control">
                        <div class="arr left" id="arr1l_obych">
                        </div>
                        <div class="arr right" id="arr1r_obych">
                        </div>
                    </div>
                    <div class="slider-wrap_obych">
                        <div class="item active" data-id="1">
                            <div class="left_form">
                                <form class="form"  action="#" method="get">
                                    <p class="xotite">Хотите записаться на <span class="bl"></span> <span class="pink">бесплатное занятие?</span></p>
                                    <div class="zajavka">Оставьте заявку, и мы свяжемся
                                    <br> с вами. </div>
                                    <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                                    <input type="text" name="phone" class="input" placeholder="Телефон">
                                    <input type="hidden" name="frmid" value="Как проходить обучение">
                                    <button class="frm">Записаться</button>
                                </form>
                            </div>
                            <div class="right_sld">
                                <p class="p_sld">Оставьте заявку</p>
                                <p class="txt_sld">Узнать о курсе подробнее и записаться на пробное бесплатное занятие можно по телефону <a href="tel:+78312885410">+7 (831) 288-54-10.</a><br><br> Можете также оставить заявку на сайте, чтобы мы перезвонили вам сами.<br><br> Менеджер ответит на вопросы и запишет на пробный урок.
                            </p>
                            <div class="pomp">Записаться на пробный урок</div>
                        </div>
                        
                    </div>
                    <div class="item" data-id="2">
                        <div class="left_form">
                            <form class="form"  action="#" method="get">
                                <p class="xotite">Хотите записаться на<span class="bl"></span> <span class="pink">бесплатное занятие?</span></p>
                                <div class="zajavka">Оставьте заявку, и мы свяжемся
                                <br> с вами. </div>
                                <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                                <input type="text" name="phone" class="input" placeholder="Телефон">
                                <input type="hidden" name="frmid" value="Как проходить обучение">
                                <button class="frm">Записаться</button>
                            </form>
                        </div>
                        <div class="right_sld">
                            <p class="p_sld">Пробное занятие</p>
                            <p class="txt_sld">На пробном занятии вы научитесь шить простую деталь — накладной карман. Мы решили, что такое знакомство лучше любой теории. Во-первых, вы сразу познакомитесь с одним из преподавателей и поймете, как проходят уроки. Во-вторых, практика поможет точно определиться, насколько вам интересен курс.<br><br>Пробный урок проходит в выходные дни и занимает от 1,5 до 2 часов. Основатель школы Тимур Саласенко всегда присутствует на занятии и готов ответить на интересующие вас вопросы.<br><br>
                                В этот день проходит запись в ближайшие группы. Важно, что в одной группе обучается не больше шести человек, чтобы преподаватель уделил достаточно времени каждой ученице.
                            </p>
                            <div class="pomp">Записаться на пробный урок</div>
                        </div>
                        
                    </div>
                    <div class="item" data-id="3">
                        <div class="left_form">
                            <form class="form"  action="#" method="get">
                                <p class="xotite">Хотите записаться на<span class="bl"></span> <span class="pink">бесплатное занятие?</span></p>
                                <div class="zajavka">Оставьте заявку, и мы свяжемся
                                <br> с вами. </div>
                                <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                                <input type="text" name="phone" class="input" placeholder="Телефон">
                                <input type="hidden" name="frmid" value="Как проходить обучение">
                                <button class="frm">Записаться</button>
                            </form>
                        </div>
                        <div class="right_sld">
                            <p class="p_sld">Практическая вводная часть</p>
                            <p class="txt_sld">Курс состоит из 16 занятий и длится два месяца. Урок занимает 3 часа практики и проходит 2 раза в неделю.<br><br>
                                На вводном части, состоящей из двух уроков, преподаватель рассказывает о базовых вещах, которые необходимо знать для начала работы.<br><br> Знакомит со швейными машинками, рассказывает о видах ножниц, иголок и других инструментах профессиональной портной.<br><br>
                                Девушки учатся машинным и ручным швам, кто-то уже на втором занятии начинает кроить юбку.
                            </p>
                            <div class="pomp">Записаться на пробный урок</div>
                        </div>
                        
                    </div>
                    <div class="item" data-id="4">
                        <div class="dot_fot_wrap">
                            <img src="img/juba.jpg" alt="">
                        </div>
                        <div class="right_sld">
                            <p class="p_sld">Пошив юбки
                            </p>
                            <p class="txt_sld">Пошив юбки занимает от трех до шести занятий в зависимости от сложности фасона и ткани. Это базовая деталь женского гардероба, которую вы научитесь шить от и до.<br><br> Преподаватель обучает моделированию выкроек, рассказывает о нюансах и помогает в создании вещи, которая сядет на вас идеально.<br><br>
                                Вы сами выбираете фасон, чтобы не прятать свою первую юбку в шкафу, а носить и радоваться. Преподаватели готовы помочь с выбором ткани и дизайна.
                            </p>
                            
                        </div>
                    </div>
                    <div class="item" data-id="5">
                        <div class="dot_fot_wrap">
                            <img src="img/bryki.jpg" alt="">
                        </div>
                        <div class="right_sld">
                            <p class="p_sld">Пошив брюк или блузки</p>
                            <p class="txt_sld">Если вы не хотите шить брюки, можно выбрать другое изделие из женского гардероба. Например, блузку, топ, шорты. Этот блок занимает около пяти занятий. <br><br>Скорость выполнения полностью зависит от вашего посещения, выполнения домашних заданий и усердия.<br><br> Но, в любом случае, преподаватель всегда поможет. Даже когда вы шьете дома, он остается на связи по Viber.
                            </p>
                            
                        </div>
                    </div>
                    <div class="item" data-id="6">
                        <div class="dot_fot_wrap">
                            <img src="img/platja.jpg" alt="">
                        </div>
                        <div class="right_sld">
                            <p class="p_sld">Пошив платья
                            </p>
                            <p class="txt_sld">Самый любимый блок, потому что найти подходящее платье в масс-маркете не так то просто.<br><br> Обучение также занимает от четырёх до пяти занятий и проходит под чутким руководством преподавателя.<br><br>
                                В конце курса у вас будет минимум три готовых изделия и огромный багаж знаний.<br><br> Вы научитесь шить по своим меркам и адаптировать любые выкройки даже на нестандартную фигуру.
                            </p>
                            
                        </div>
                    </div>
                    <div class="item" data-id="7">
                        <div class="dot_fot_wrap gor_fot">
                            <img class="gor_dot_fot_wrap"src="img/test.jpg" alt="">
                        </div>
                        <div class="right_sld">
                            <p class="p_sld">Подарочная фотосессия
                            </p>
                            <p class="txt_sld">Всем выпускницам мы дарим фотосессию в нарядах, сшитых во время курса.<br><br> Там же, в торжественной обстановке, вручаем сертификаты о прохождении курса.<br><br> Если вас интересует новая профессия, они придутся кстати.
                            </p>
                            
                        </div>
                    </div>
                    <div class="item" data-id="8">
                        <div class="dot_fot_wrap gor_fot">
                            <img class="gor_dot_fot_wrap" src="img/perspekt.jpg" alt="">
                        </div>
                        <div class="right_sld">
                            <p class="p_sld">Перспективы
                            </p>
                            <p class="txt_sld">Треть наших учениц продолжают швейное дело — их хобби становится любимой работой.<br><br> После базового курса многие берут индивидуальные уроки и обучаются на продвинутых курсах, чтобы довести мастерство до совершенства.<br><br> К тому же всем нашим ученицам мы дарим скидку 10% на следующие программы.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  id="whyus" class="sec3">
        <div>
            <div class="trb">Какие проблемы и задачи решает
            <br>Женская школа кройки и шитья</div>
            <div class="l_trbl">
                <img src="img/timyr.png" alt="">
            <div class="name">Тимур Саласенко</p>
        </div>
    </div>
    <div class="r_trbl">
        <div class="citata">«Каждый год больше 150 девушек проходят базовый курс „Технология пошива“.
            <br> Я всегда собираю обратную связь у каждой из них, чтобы исправить ошибки
            <br> и помочь новичкам еще лучше освоить швейное дело. Так появилась поддержка
            <br> по Viber, чтобы даже дома вы могли задать вопросы и сделать работу
            <br> качественно. И методички по выбору швейной машинки и тканей, где есть
            <br> ответы на самые актуальные вопросы учеников», — основатель компании
            <br> Тимур Саласенко.
            <br>
            <br> Женская школа кройки и шитья — это нечто большее, чем сухое обучение.
            <br> Это работа тысячи людей.
        </div>
    </div>
    <div class="dreams">
        <div class="trbl">
            <div class="trouble trb_pos active" data-id="1">
                <div class="trb_pos">1</div>
                <p class="name_pos">Нехочу переплачивать<br>за вещи из магазинов</p>
                <div class="helper"></div>
            </div>
            <div class="trouble trb_pos" data-id="2">
                <div class="trb_pos">2</div>
                <p class="name_pos">Немогу найти вещи<br>по фигуре</p>
                <div class="helper"></div>
            </div>
            <div class="trouble trb_pos" data-id="3">
                <div class="trb_pos">3</div>
                <p class="name_pos">Умею шить,но не умею<br>кроить</p>
                <div class="helper"></div>
            </div>
            <div class="trouble trb_pos" data-id="4">
                <div class="trb_pos">4</div>
                <p class="name_pos">Мечтаю открыть<br>свою мастерскую</p>
                <div class="helper"></div>
            </div>
            <div class="trouble trb_pos" data-id="5">
                <div class="trb_pos">5</div>
                <p class="name_pos">Устала от рутины</p>
                <div class="helper"></div>
            </div>
            <div class="trouble trb_pos" data-id="6">
                <div class="trb_pos">6</div>
                <p class="name_pos">Мечтаю открыть<br>свою мастерскую</p>
                <div class="helper"></div>
            </div>
        </div>
    </div>
    
    <div class="slider8">
        <div class="slide-control">
            <div class="arr left" id="arr1l_trbll">
            </div>
            <div class="arr right" id="arr1r_trbll">
            </div>
        </div>
        <div class="slider-wrap_tbrl">
            <div class="item active" data-id="1">
                <div class="comments">
                    <p class="drm">Не хочу переплачивать
                    <br>за вещи из магазинов</p>
                    <p class="drm_txt">Стоимость вещей из масс-маркета
                        складывается из человеческого труда,
                        материалов и наценки магазинов.<br><br>
                        Когда вы шьете сами, экономите
                        до 50% средств. При этом сами
                        выбираете ткань по вкусу
                        и эксклюзивный фасон.<br><br>
                        Зачем подстраиваться под
                        магазины, когда можно
                    сшить самой?</p>
                    
                </div>
            </div>
            <div class="item" data-id="2">
                <div class="comments">
                    <p class="drm">Не могу найти вещи по фигуре</p>
                    <p class="drm_txt">Вас научат, как правильно посадить вещи, чтобы они корректировали фигуру.<br><br>Вас научат, Больше не будет муторного поиска того самого платья. Спустя два месяца вы сами его сошьете.<br><br> Сошьете на себя, по своим меркам, с учетом особенностей фигуры.
                    </p>
                    
                </div>
            </div>
            <div class="item" data-id="3">
                <div class="comments">
                    <p class="drm">Умею шить, но не умею кроить</p>
                    <p class="drm_txt">Знания, полученные в нашей школе кройки и шитья, помогают даже опытным мастерам. <br><br>Преподаватели рассказывают нюансы, о которых умалчивают на разовых курсах. Например, о секретах раскроя изделия. <br><br>Обладая не только навыками шитья, но и кроя, вы становитесь «универсальным солдатом».</p>
                    
                </div>
            </div>
            <div class="item" data-id="4">
                <div class="comments">
                    <p class="drm">Мечтаю открыть свою мастерскую</p>
                    <p class="drm_txt">Вы получаете сертификат о прохождении обучения. <br><br>Это документ, который поможет при устройстве на работу и открытии своего бизнеса.
                    </p>
                </div>
            </div>
            <div class="item" data-id="5">
                <div class="comments">
                    <p class="drm">Устала от рутины</p>
                    <p class="drm_txt">К нам часто приходят молодые мамы, чтобы почерпнуть вдохновение и освоить новую профессию. <br><br>Спустя два месяца они шьют вещи для себя и своей семьи. <br class="m1"><br class="m1">Многие признаются, что уроки подарили им второе дыхание.
                    </p>
                </div>
            </div>
            <div class="item" data-id="6">
                <div class="comments">
                    <p class="drm">Много красивых тканей,<br> из который хочется шить
                    </p>
                    <p class="drm_txt">На курсах проходим не только особенности пошива изделий, но и рассказываем о тканях.<br><br> Даже в самом большом магазине тканей    вы сможете быстро сориентироваться и выбрать подходящий товар.<br><br> Из которого потом сошьете удивительные вещи с авторским дизайном.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <form class="form"  action="#" method="get">
        <p class="xotite">Хотите записаться
            <br> <span class="bl">на</span> <span class="pink">бесплатное занятие?</span></p>
            <div class="zajavka">Оставьте заявку, и мы свяжемся
            <br>с вами. </div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Какие проблемы решает школа">
            <button class="frm">Оставить заявку</button>
        </form>
    </div>
</section>
<section class="sec4">
    <div>
        <p class="fotogallery">Фотогалерея</p>
        <p class="gal_txt">Погрузитесь в атмосферу Женской школы кройки и шитья
        <br> вместе с теми ,кто уже прошел наши курсы</p>
        <div class="slider3">
            <div class="slider-wrap">
                <div class="sld_foto">
                    <img src="img/gl1.jpg" alt="">
                </div>
                <div class="sld_foto">
                    <img src="img/gl2.jpg" alt="">
                </div>
                <div class="sld_foto">
                    <img src="img/gl3.jpg" alt="">
                </div>
                <div class="sld_foto">
                    <img src="img/gl4.jpg" alt="">
                </div>
                <div class="sld_foto">
                    <img src="img/gl5.jpg" alt="">
                </div>
            </div>
            <div class="slide-control">
                <div class="arr left" id="arr1l">
                </div>
                <div class="arr right" id="arr1r">
                </div>
            </div>
        </div>
        <a href="./gallery.php" class="gotogall">Перейти в галерею</a>
        <div id="ourteam" class="polosa">
            <div class="gz"></div>
            <div class="gz_dygga"></div>
            <div class="ourteam">Наша команда</div>
        </div>
        <div class="l_team">
            <div class="prepodi">
                <div class="chl active" data-id="1">
                    <img src="img/timyr_m.jpg" alt="">
                    <p class="name">Саласенко Тимур Юрьевич<br><span>директор и основатель школы</span></p>
                    <div class="helper"></div>
                </div>
                <div class="chl" data-id="2">
                    <img src="img/galina.jpg" alt="">
                    <p class="name">Шабалина Галина Павловна<br><span>преподаватель</span></p>
                    <div class="helper"></div>
                </div>
                <div class="chl" data-id="3">
                    <img src="img/valentina.jpg" alt="">
                    <p class="name">Крюкова Валентина Андреевна<br><span>преподаватель</span></p>
                    <div class="helper"></div>
                </div>
                <div class="chl" data-id="4">
                    <img class="" src="img/nina.jpg" alt="">
                    <p class="name">Захарова Нина Валентиновна<br><span>преподаватель</span></p>
                    <div class="helper"></div>
                </div>
            </div>
            <div class="inf_year">
                <div class="p_inf_y">За год в Женской школе кройки
                    <br> и шитья отшивается более 450
                    <br> эксклюзивных изделий и всё
                    <br> благодаря им — нашим
                    <br> преподавателям. Каждая из них
                    <br> обладает многолетним опытом
                    <br> портновского дела и обучения.
                    <br> Они знают, как пройти через
                    <br> кризис «У меня ничего не
                    <br> получается» и объяснить
                    <br> сложнейшие элементы при пошиве
                    <br> одежды.
                    <br>
                    <br> Поэтому на курсах царит
                    <br> дружелюбная и вдохновляющая
                    <br> атмосфера,в которой не страшно
                    <br> задать вопросы, поделиться
                    <br> возникшими трудностями и вместе
                <br> преодолеть стежок за стежком.</div>
            </div>
        </div>
        <div class="r_team">
            <div class="slider6">
                <div class="slide-control">
                    <div class="arr left" id="arr1l_comm">
                    </div>
                    <div class="arr right" id="arr1r_comm">
                    </div>
                </div>
                <div class="slider-wrap_comm">
                    <div class="item active" data-id="1">
                        <div class="face active">
                            <img src="img/fc1.jpg" alt="">
                        </div>
                        <p class="nmr">Саласенко Тимур Юрьевич<br><span>директор и основатель школы</span></p>
                        <div class="txt_tm">«Я открыл школу в августе 2016 года. Собрал команду
                            <br> высококлассных преподавателей, лучших мастеров своего дела.
                            <br> Под моим управлением в школе каждый год отшивается более 450
                            <br> уникальных изделий. <br class="m1"><br class="m1">Около четырех раз в год я провожу глобальные
                            <br> студийные фотосессии, на которых снимаем наших учениц
                            <br> в их сшитых нарядах.
                            <br>
                            <br> <br class="m1"><br class="m1">Я лично провожу пробные уроки, запускаю новые группы
                            <br> и обязательно после прохождения курса я беру обратную связь
                            <br> у каждой ученицы. Узнаю, как прошло обучение, какую бы оценку
                            <br> они поставили нашей школе, что можно улучшить и добавить в курс.
                            <br><br class="m1"><br class="m1">
                            <br> К преподавательскому составу выдвигаю довольно много критериев,
                            <br> но самое главное — наличие специального образования в портновской
                            <br> отрасли, опыт индивидуального пошива от 20 лет, обязательный опыт
                            <br> преподавания и подготовки портных в специализированных учебных
                            <br> заведениях. Поэтому я спокоен за наполнение курса и компетентность
                            <br> каждого члена моей команды».
                        </div>
                    </div>
                    <div class="item" data-id="2">
                        <div class="face active">
                            <img src="img/fc2.jpg" alt="">
                        </div>
                        <p class="nmr">Шабалина Галина Павловна<br><span>Ведет вечерние и дневные группы, занимается индивидуальным обучением и дополнительными уроками.</span></p>
                        <div class="txt_tm">
                            <span class="normal_txt">
                                Опыт работы более 20 лет.<br><br><br class="m1">
                                Помимо работы портным Галина Павловна занималась преподаванием в течение 15 лет. За это время она выпустила более 400 портных.<br><br> <br class="m1"><br class="m1">Принимала участие в конкурсах профессионального мастерства и сопровождала учащихся на городские и региональные конкурсы профмастерства.<br><br><br class="m1"><br class="m1">
                            Также занималась индивидуальным пошивом, специализируясь на легкой и верхней женской одежде, мужском гардеробе.<br><br><br class="m1"><br class="m1"></span>
                            «Научу шить качественно и профессионально — для себя, детей, родных и близких. Если вы умеете шить, покажу, как повысить качество изделий и придать им хорошую посадку. С радостью поделюсь всеми секретами и секретиками шитья и кроя, накопленными за долгую профессиональную жизнь».
                        </div>
                    </div>
                    <div class="item" data-id="3">
                        <div class="face active">
                            <img src="img/fc4.jpg" alt="">
                        </div>
                        <p class="nmr">Крюкова Валентина Андреевна<br><span>Ведет группы выходного дня, занимается индивидуальным обучением и дополнительными уроками.</span></p>
                        <div class="txt_tm">
                            <span class="normal_txt">Опыт работы более 28 лет.<br><br><br class="m1">
                            Валентина Андреевна сотрудничала с крупнейшим ателье Нижнего Новгорода «Элегант». Работала в нижегородском колледже закройщицей, помогая группам дизайнеров и портных. <br class="m1"><br class="m1">Под ее руководством создавались модели для «Золотого подиума», «Студенческой весны » и других городских конкурсов.<br><br><br class="m1"><br class="m1">Выпустила больше 100 учеников, многие из которых остались в профессии и открыли свои мастерские.<br><br><br class="m1"><br class="m1"></span>
                            «Что можно сказать о нашей профессии — это сложная, требующая усидчивости и терпения работа. Но это благодарный труд, ведь таких вещей, какие можно сшить своими руками, вы не найдете нигде».
                        </div>
                    </div>
                    <div class="item" data-id="4">
                        <div class="face active">
                            <img src="img/fc3.jpg" alt="">
                        </div>
                        <p class="nmr">Захарова Нина Валентиновна<br><span>Ведет утренние группы, занимается индивидуальным обучением и дополнительными уроками.</span></p>
                        <div class="txt_tm">
                            <span class="normal_txt">
                                Опыт работы 32 года.<br><br><br class="m1">
                                Нина Валентиновна работала мастером производственного обучения и преподавателем. Постоянно повышает профессиональный уровень и мастерство, сотрудничая с молодежью.<br><br><br class="m1"><br class="m1">
                                При аттестации в 2006 году получила высшую квалификационную категорию. Со студентами всегда создавала интересные и сложные коллекции, участвовали в конкурсах молодых дизайнеров и конструкторов-модельеров, фестивалях молодежной моды.<br><br><br class="m1"><br class="m1">
                            За активную творческую работу и вклад в воспитание высококвалифицированных специалистов неоднократно награждалась почетными грамотами, благодарственными письмами и дипломами. В 2007 году получила Почетную грамоту Министерства образования и науки РФ.<br class="m1"><br class="m1"><br><br></span>
                            «Я очень люблю свою специальность: работа творческая, интересная, но трудоемкая. Пройдя большой трудовой путь, хочется передавать полученный опыт и мастерство людям, желающим освоить технологию изготовления швейных изделий».
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec5">
    <div>
        <p class="kyrsi">Курсы Женской школы кройки и шитья</p>
        <p class="kyrs_txt">В Женской школе кройки и шитья разработаны кусры для разного уровня.
            <br>Вы можете подобрать подходящий,независимо от вашего графика
        <br>и умения шить.</p>
        <div class="grafik">
            <div class="kln td_head">
                <div class="groups"><span>Группы:</span></div>
                <div class="obychenie "><span>График обучения</span></div>
            </div>
            <div class="kln td1">
                <div class="groups"><span>Утренние:</span></div>
                <div class="obychenie mytb"><span>с 11 до 14<br>будни</span></div>
            </div>
            <div class="kln td2">
                <div class="groups"><span>Дневные:</span></div>
                <div class="obychenie mytb"><span>с 15 до 18<br>будни</span></div>
            </div>
            <div class="kln td3">
                <div class="groups"><span>Вечерние:</span></div>
                <div class="obychenie mytb"><span>с 18 до 12<br>будни</span></div>
            </div>
            <div class="kln td4">
                <div class="groups"><span>Группа выходного дня</span></div>
                <div class="obychenie mytb"><span>с 10 до 13<br>Сб и Вс</span></div>
            </div>
            <div class="kln td5">
                <div class="groups"><span>Индивидуальное<br>обучение</span></div>
                <div class="obychenie dt5 mytb">
                    <span>график подбирается индивидуально</span>
                </div>
            </div>
        </div>
        <div class="texnologja">
            <div class="slide-control_type">
                <div class="arr left" id="arr1l_type">
                </div>
                <div class="arr right" id="arr1r_type">
                </div>
            </div>
            <div class="slider7">
                <div class="slider-wrap_type">
                    <div class="item">
                        <div class="l_textn">
                            <div class="tryd">
                                <img src="img/tryd.jpg" alt="">
                            </div>
                            <div class="skidka">
                                <p class="sk1">8 450 рублей<span class="month">/месяц</span></p>
                                <p class="sk2">6 950 рублей<span class="month">/месяц</span></p>
                            </div>
                        </div>
                        <div class="r_textn">
                            <p class="txt_1">
                                Технология пошива, <span>1 ступень</span>
                            </p>
                            <p class="txt_2">Для новичков и тех, кто обучался дома самостоятельно<br>Погружаем учеников в швейное дело и учим<br>профессионально шить одежду для себя</p>
                            <p class="txt_3">
                                Три изделия: <span>из базового гардероба на выбор<br>(например: юбка,брюки платье)</span>
                            </p>
                            <p class="txt_4">
                                Фасоны: <span>простые и средние сложности,на ваш выбор.</span>
                            </p>
                            <p class="txt_5">
                                Ткани: <span>легкие и средние в пошиве</span>
                            </p>
                            <div class="txt_6">
                                <p class="takge">А также:</p>
                                <p class="pnk">поддержка в Viber</p>
                                <p class="pnk">скидки на ткани и швейную технику от партнеров;</p>
                                <p class="pnk">бесплатная студийная фотосессия в сшитых изделиях;</p>
                                <p class="pnk">сертификат об окончании курса</p>
                                <p class="pnk">скидка 10% на все последующие обучения
                                <br> в нашей школе</p>
                            </div>
                            <p class="txt_7">
                                Группы: <span>утренние, дневные, вечерние и группы<br>выходного дня</span>
                            </p>
                            <p class="txt_8">16 практических занятий (2 месяца)
                            <br>2 раза в неделю по 3 часа каждое</p>
                        </div>
                        <button class="kyrs" data-id="texn_poshiv1">Записаться на курс</button>
                        <p class="dlina">Длительность курса 2 месяца</p>
                    </div>
                    <div class="item">
                        <div class="l_textn">
                            <div class="tryd">
                                <img src="img/tryd2.jpg" alt="">
                            </div>
                            <div class="skidka">
                                <p class="sk1">9 450 рублей<span class="month">/месяц</span></p>
                                <p class="sk2">6 950 рублей<span class="month">/месяц</span></p>
                            </div>
                        </div>
                        <div class="r_textn">
                            <p class="txt_1">
                                Технология пошива, <span>2 ступень</span>
                            </p>
                            <p class="txt_2">Для тех, кто хорошо умеет шить, но хочет повышения квалификации. После этого курса многие открывают собственное швейное дело. Выпускникам первой ступени — скидка 10%.</p>
                            <p class="txt_3">
                                Изделия: <span>на ваш выбор, любой сложности</span>
                            </p>
                            <p class="txt_4">
                                Фасоны: <span>средней и повышенной сложности</span>
                            </p>
                            <p class="txt_5">
                                Ткани: <span>любые, в том числе и сложные</span>
                            </p>
                            <div class="txt_6">
                                <p class="takge">А также:</p>
                                <p class="pnk">поддержка в Viber</p>
                                <p class="pnk">скидки на ткани и швейную технику от партнеров;</p>
                                <p class="pnk">бесплатная студийная фотосессия в сшитых изделиях;</p>
                                <p class="pnk">сертификат об окончании курса</p>
                            </div>
                            <p class="txt_7">
                                Группы: <span>утренние, дневные, вечерние и группы<br>выходного дня</span>
                            </p>
                            <p class="txt_8">16 практических занятий (2 месяца)
                            <br>2 раза в неделю по 3 часа каждое</p>
                        </div>
                        <button class="kyrs" data-id="texn_poshiv2">Записаться на курс</button>
                        <p class="dlina">Длительность курса 2 месяца</p>
                    </div>
                    <div class="item">
                        <div class="l_textn">
                            <div class="tryd">
                                <img src="img/tryd3.jpg" alt="">
                            </div>
                            <div class="skidka">
                                <!--<p class="sk1">9 450 рублей/месяц</p>-->
                                <p class="sk2">9 900 за весь курс</p>
                            </div>
                        </div>
                        <div class="r_textn">
                            <p class="txt_1">
                                Курс: Пальто
                            </p>
                            <p class="txt_2">Только для тех, кто прошел наш курс Технология пошива, 1 ступень.
                            Обучаем пошиву верхней одежды и дарим скидку 10% на эту программу.</p>
                            <div class="txt_6">
                                <p class="takge">А также:</p>
                                <p class="pnk">поддержка в Viber</p>
                                <p class="pnk">скидки на ткани и швейную технику от партнеров;</p>
                                <p class="pnk">бесплатная студийная фотосессия в сшитых изделиях;</p>
                                <p class="pnk">сертификат об окончании курса</p>
                                
                            </div>
                            <p class="txt_3">
                                Длительность курса:
                                <span>10 практический занятий по 3 часа каждое</span>
                            </p>
                        </div>
                        <button class="kyrs" data-id="palto">Записаться на курс</button>
                        <p class="dlina">Длительность курса 2 месяца</p>
                    </div>
                    <div class="item">
                        <div class="l_textn">
                            <div class="tryd">
                                <img src="img/tryd5.jpg" alt="">
                            </div>
                            <!-- <div class="skidka">
                                <p class="sk1">9 450 рублей/месяц</p>
                                <p class="sk2">6 450 рублей/месяц</p>
                            </div>-->
                        </div>
                        <div class="r_textn">
                            <p class="txt_1">
                                Курс: Нижнее белье
                            </p>
                            <p class="txt_2">Для новичков и тех, кто обладает базовыми знаниями в пошиве одежды.<br><br> Обучаем деликатному пошиву нижнего белья для женщин.<br><br> Выпускникам первой ступени — скидка 10%.</p>
                            <p class="txt_3">
                                В разработке.
                            </p>
                            
                        </div>
                    </div>
                    <div class="item">
                        <div class="l_textn">
                            <div class="tryd">
                                <img src="img/tryd4.jpg" alt="">
                            </div>
                            <div class="skidka">
                                <p class="sk1">9 450 рублей<span class="month">/месяц</span></p>
                                <p class="sk2">7 450 рублей<span class="month">/месяц</span></p>
                            </div>
                        </div>
                        <div class="r_textn">
                            <p class="txt_1">
                                Курс: Конструирование и моделирование
                            </p>
                            <p class="txt_2">
                                Учим создавать выкройки разной сложности.
                            </p>
                            <p class="txt_3">
                                15 практических занятий (2 месяца)<br>
                                <span>2 раза в неделю по 3 часа каждое</span>
                            </p>
                        </div>
                        <button class="kyrs"data-id="konstr_model">Записаться на курс</button>
                        <p class="dlina">Длительность курса 2 месяца</p>
                    </div>
                    <div class="item pop_texn">
                        <div class="l_textn">
                            <div class="tryd">
                                <img src="img/tryd6.jpg" alt="">
                            </div>
                            <div class="skidka">
                                <p class="sk1">38 680 за <span class="month">весь</span> курс</p>
                                <p class="sk2">32 900 за <span class="month">весь</span> курс</p>
                            </div>
                        </div>
                        <div class="r_textn">
                            <p class="txt_1">
                                Индивидуальное обучение <span></span>
                            </p>
                            <p class="txt_2">Подходит тем, у кого нестандартный график работы.<br> И кому комфортнее обучаться один на один с преподавателем.</p>
                            <p class="txt_3">
                                Три изделия: <span>из базового гардероба на выбор<br>(например: юбка,брюки платье)</span>
                            </p>
                            <p class="txt_4">
                                Фасоны: <span>простые и средние сложности,на ваш выбор.</span>
                            </p>
                            <p class="txt_5">
                                Ткани: <span>легкие и средние в пошиве</span>
                            </p>
                            <div class="txt_6">
                                <p class="takge">А также:</p>
                                <p class="pnk">поддержка в Viber</p>
                                <p class="pnk">скидки на ткани и швейную технику от партнеров;</p>
                                <p class="pnk">бесплатная студийная фотосессия в сшитых изделиях;</p>
                                <p class="pnk">сертификат об окончании курса</p>
                                <p class="pnk">скидка 10% на все последующие обучения
                                <br> в нашей школе</p>
                            </div>
                            <p class="txt_7">
                                График: <span>подбирается индивидуально</span>
                            </p>
                            <p class="txt_8">16 практических занятий (2 месяца)
                            <br>2 раза в неделю по 3 часа каждое</p>
                        </div>
                        <button class="kyrs" data-id="individ">Записаться на курс</button>
                        <p class="dlina">Длительность курса 2 месяца</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="./kyrsi.php" class="kyrsu">Смотреть все курсы</a>
    </div>
</section>
<section id="contacts" class="sec6">
    <div>
        <p class="contacts">Контакты</p>
        <div class="l_foot">
            <div class="map"></div>
            <div class="adrs">Адрес<br><?php include('settings/adr.txt'); ?>
            </div>
        </div>
        <div class="r_foot">
            <form class="form"  action="#" method="get">
                <p class="xotite">Остались вопросы?<br> <span class="bl">Закажите</span> <span class="pink">обратный звонок</span></p>
                <div class="zajavka">Наш менеджер перезвонит вам в<br> ближайшее время и ответит на<br> оставшиеся вопросы</div>
                <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                <input type="text" name="phone" class="input" placeholder="Телефон">
                <input type="hidden" name="frmid" value="Контакты">
                <button class="frm">Заказать звонок</button>
            </form>
        </div>
    </div>
</section>
<?php include('html/footer.php'); ?>
<div class="hidden-box">
    <div id="form-error-pop" class="i-pop">
        <div class="close"></div>
        <div id="form-error-text"></div>
    </div>
    <div id="okgo" class="i-pop">
        <div class="close"></div>
        Спасибо за заявку!<br>Мы перезвоним  вам в ближайшее время
    </div>
    <div class="pop_z" id="pop_head">
        <form class="form"  action="#" method="get">
            <p class="xotite">Хотите записаться на <span class="pink">курс технология пошива?</span></p>
            <div class="zajavka">Оставьте заявку, и мы свяжемся с вами. </div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Форма в шапке">
            <button class="frm">Записаться</button>
        </form>
    </div>
    <div class="pop_met" id="pop_metodichka">
        <form class="form"  action="#" method="get">
            <p class="xotite">Хотите получить методичку по <span class="pink">тканям</span> и <span class="pink"> швейным машинкам?</span></p>
            <div class="zajavka">Заполните формы и получите методички</div>
            <div class="miniatyri">
                <div class="el"></div>
                <div class="el"></div>
            </div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Скачать методичку">
            <button class="frm">Скачать методички</button>
        </form>
    </div>
    <div class="pop_texn" id="texn_poshiv1">
        <form class="form"  action="#" method="get">
            <p class="xotite">Хотите записаться на курс <span class="pink"> Технология пошива?</span></p>
            <div class="zajavka">Оставьте заявку и мы свяжемся с вами</div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Первая ступень">
            <button class="frm">Оставьте заявку</button>
        </form>
    </div>
    <div class="pop_texn" id="texn_poshiv2">
        <form class="form"  action="#" method="get">
            <p class="xotite">Хотите записаться на курс <span class="pink"> Технология пошива?</span></p></p>
            <div class="zajavka">Оставьте заявку и мы свяжемся с вами</div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Вторая ступень">
            <button class="frm">Оставьте заявку</button>
        </form>
    </div>
    <div class="pop_texn" id="palto">
        <form class="form"  action="#" method="get">
            <p class="xotite">Хотите записаться на курс <span class="pink">Пальто?</span></p></p>
            <div class="zajavka">Оставьте заявку и мы свяжемся с вами</div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Курс пальто">
            <button class="frm">Оставьте заявку</button>
        </form>
    </div>
    <div class="pop_texn" id="konstr_model">
        <form class="form"  action="#" method="get">
            <p class="xotite">Хотите записаться на курс <span class="pink">Конструирование и моделирование?</span></p>
            <div class="zajavka">Оставьте заявку и мы свяжемся с вами</div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Конструирование и моделирование">
            <button class="frm">Оставьте заявку</button>
        </form>
    </div>
    <div class="pop_texn" id="individ">
        <form class="form"  action="#" method="get">
            <p class="xotite">Хотите записаться на курс <span class="pink">Индивидуальное обучение?</span></p>
            <div class="zajavka">Оставьте заявку и мы свяжемся с вами</div>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Индивидуальное">
            <button class="frm">Оставьте заявку</button>
        </form>
    </div>
    <div class="vcard">
        <div>
            <span class="category">Школа</span>
            <span class="fn org">Женская школа кройки и шитья</span>
        </div>
        <div class="adr"><?php include('settings/adr.txt'); ?></div>
        <div>Телефон: <span class="tel"><?php include('settings/phone.txt'); ?></span></div>
    </div>
</div>
<div id="maket"></div>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script src="js/init.js"></script> 
</body>
</html>
