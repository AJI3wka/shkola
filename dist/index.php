<?php include('ajax/amo_helper.php'); ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        
        <?php include('html/meta.html'); ?>
        <link rel="preload" href="fonts/GothamProRegular.woff" as="font" type="font/woff" crossorigin="anonymous">
        <link rel="preload" href="css/fonts.css" as="style">
        <!-- <script src="http://localhost:0000/livereload.js"></script> -->
        <style>
        <?php include('css/head.min.css'); ?>
        </style><script>!function(e,t,n){function r(){for(;u[0]&&"loaded"==u[0][l];)o=u.shift(),o[f]=!a.parentNode.insertBefore(o,a)}for(var i,s,o,u=[],a=e.scripts[0],f="onreadystatechange",l="readyState";i=n.shift();)s=e.createElement(t),"async"in a?(s.async=!1,e.head.appendChild(s)):a[l]?(u.push(s),s[f]=r):e.write("<"+t+' src="'+i+'" defer></'+t+">"),s.src=i}(document,"script",["https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js","js/init.min.js"]);</script>
         
         
         
        
        <!-- блок статического и динамического критического css не удалять -->
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
                            <p class="ad"><?php $text = file_get_contents('settings/adr.txt'); echo(str_replace(PHP_EOL, " <br>", $text)); ?></p>
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
                    <h3>Женская школа  <br>кройки и шитья</h3>
                    <div class="sch_txt">
                        <p class="new">Школа шитья для начинающих.</p>
                        <p class="smtxt">Научим професcиональному шитью <br> и созданию эксклюзивной одежды <br> по вашим меркам</p>
                        <div class="machine">
                            <div class="wrp_machine">
                                <p class="free">Посетите одно занятие бесплатно.</p>
                                <p class="txtsm">Урок не вводный и не теоретический. <br>На пробном занятии вы уже будете <br> шить на швейных машинках</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="school_r">
                    <form class="form"  action="#" method="get">
                        <p class="xotite">Хотите записаться  <br> <span class="bl">на</span> <span class="pink">бесплатное занятие?</span></p>
                        <div class="zajavka">Оставьте заявку, и мы свяжемся с вами. </div>
                        <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                        <input type="text" name="phone" class="input" placeholder="Телефон">
                        <input type="hidden" name="frmid" value="Форма в шапке">
                        <button class="frm y_button" id="">Оставить заявку</button>
                    </form>
                </div>
            </div>
        </section>
        <section  class="sec2">
            <div>
                <h2>Полезный бонус</h2>
                <div class="bonus_l">
                    <div class="wrp_met">
                        <p class="forme">Как выбрать <br>
                        швейную машинку для себя ?</p>
                        <p class="formetxt">Мы знаем, что новичкам сложно учесть все нюансы
                            при покупке швейной машинки, поэтому разработали для вас
                            специальную методичку. Она сэкономит ваше времяи средства,
                            а еще поможет разобраться в тонкостях швейного дела. <br> <br>
                            <span class="fin">В конце мы поместили промокод — скидку 5% и 25% <br>
                            на товары швейного магазина «ТекстильТорг».</span>
                        </p>
                    </div>
                </div>
                <div class="bonus_r">
                    <div class="wrp_met">
                        <p class="tkanb">Какую ткань выбрать? <br>Разбираемся в материалах для шитья</p>
                        <p class="tkanbtxt">Мы также уделили особое внимание теме тканей. В этой сфере
                            настоящий бардак, в котором сложно разобраться самому.
                            Давайте разбираться вместе. В методичке собраны основные виды
                            тканей с практическими советами и рекомендациями по выбору. <br>
                            <span class="fin">Дочитайте до концам — там ждут приятные
                            бонусы от наших партнеров.</span>
                        </p>
                    </div>
                </div>
                <div class="dyg_wrp">
                    <div class="dyga"></div>
                    <button class="dwnlmetod y_button">
                    Скачать две методички
                    </button>
                </div>
                <div id="steps_how">
                    
                </div>
                
            </div>
        </div>
    </section>
    <section  id="whyus" class="sec3">
        <div>
            <div class="trb">Какие проблемы и задачи решает
             <br>Женская школа кройки и шитья</div>
            <div class="l_trbl">
                <img  src="#" data-original="img/timyr.png" alt="">
                <p class="name">Тимур Саласенко</p>
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
                    <a href="#c1" class="trouble trb_pos scrollto active" data-id="1">
                        <div class="trb_pos">1</div>
                        <p class="name_pos">Нехочу переплачивать <br>за вещи из магазинов</p>
                        <div class="helper"></div>
                    </a>
                    <a href="#c2" class="trouble trb_pos scrollto" data-id="2" >
                        <div class="trb_pos">2</div>
                        <p class="name_pos">Немогу найти вещи <br>по фигуре</p>
                        <div class="helper"></div>
                    </a>
                    <a href="#c3" class="trouble trb_pos scrollto" data-id="3">
                        <div class="trb_pos">3</div>
                        <p class="name_pos">Умею шить,но не умею <br>кроить</p>
                        <div class="helper"></div>
                    </a>
                    <a href="#c4" class="trouble trb_pos scrollto" data-id="4">
                        <div class="trb_pos">4</div>
                        <p class="name_pos">Мечтаю открыть <br>свою мастерскую</p>
                        <div class="helper"></div>
                    </a>
                    <a href="#c5" class="trouble trb_pos scrollto" data-id="5">
                        <div class="trb_pos">5</div>
                        <p class="name_pos">Устала от рутины</p>
                        <div class="helper"></div>
                    </a>
                    <a href="#c6" class="trouble trb_pos scrollto" data-id="6">
                        <div class="trb_pos">6</div>
                        <p class="name_pos">Мечтаю открыть <br>свою мастерскую</p>
                        <div class="helper"></div>
                    </a>
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
                        <div class="comments" id="c1" >
                            <p class="drm" >Не хочу переплачивать
                             <br>за вещи из магазинов</p>
                            <p class="drm_txt">Стоимость вещей из масс-маркета
                                складывается из человеческого труда,
                                материалов и наценки магазинов. <br> <br>
                                Когда вы шьете сами, экономите
                                до 50% средств. При этом сами
                                выбираете ткань по вкусу
                                и эксклюзивный фасон. <br> <br>
                                Зачем подстраиваться под
                                магазины, когда можно
                            сшить самой?</p>
                            
                        </div>
                    </div>
                    <div class="item" data-id="2">
                        <div class="comments" id="c2">
                            <p class="drm" >Не могу найти вещи по фигуре</p>
                            <p class="drm_txt" >Вас научат, как правильно посадить вещи, чтобы они корректировали фигуру. <br> <br>Вас научат, Больше не будет муторного поиска того самого платья. Спустя два месяца вы сами его сошьете. <br> <br> Сошьете на себя, по своим меркам, с учетом особенностей фигуры.
                            </p>
                            
                        </div>
                    </div>
                    <div class="item" data-id="3">
                        <div class="comments" id="c3">
                            <p class="drm" >Умею шить, но не умею кроить</p>
                            <p class="drm_txt" >Знания, полученные в нашей школе кройки и шитья, помогают даже опытным мастерам.  <br> <br>Преподаватели рассказывают нюансы, о которых умалчивают на разовых курсах. Например, о секретах раскроя изделия.  <br> <br>Обладая не только навыками шитья, но и кроя, вы становитесь «универсальным солдатом».</p>
                            
                        </div>
                    </div>
                    <div class="item" data-id="4">
                        <div class="comments" id="c4">
                            <p class="drm" >Мечтаю открыть свою мастерскую</p>
                            <p class="drm_txt" >Вы получаете сертификат о прохождении обучения.  <br> <br>Это документ, который поможет при устройстве на работу и открытии своего бизнеса.
                            </p>
                        </div>
                    </div>
                    <div class="item" data-id="5">
                        <div class="comments" id="c5">
                            <p class="drm" >Устала от рутины</p>
                            <p class="drm_txt">К нам часто приходят молодые мамы, чтобы почерпнуть вдохновение и освоить новую профессию.  <br> <br>Спустя два месяца они шьют вещи для себя и своей семьи. <br class="m1"><br class="m1">Многие признаются, что уроки подарили им второе дыхание.
                            </p>
                        </div>
                    </div>
                    <div class="item" data-id="6">
                        <div class="comments" id="c6">
                            <p class="drm" >Много красивых тканей, <br> из который хочется шить
                            </p>
                            <p class="drm_txt">На курсах проходим не только особенности пошива изделий, но и рассказываем о тканях. <br> <br> Даже в самом большом магазине тканей    вы сможете быстро сориентироваться и выбрать подходящий товар. <br> <br> Из которого потом сошьете удивительные вещи с авторским дизайном.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <form class="form"  action="#" method="get">
                <p class="xotite">Хотите записаться <br> <span class="bl">на</span> <span class="pink">бесплатное занятие?</span></p>
                <div class="zajavka">Оставьте заявку, и мы свяжемся <br>с вами. </div>
                <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                <input type="text" name="phone" class="input" placeholder="Телефон">
                <input type="hidden" name="frmid" value="Какие проблемы решает школа">
                <button class="frm y_button">Оставить заявку</button>
            </form>
        </div>
    </section>
    <section class="sec4">
        <div>
            <div>
                <p class="fotogallery">Фотогалерея</p>
                <p class="gal_txt">Погрузитесь в атмосферу Женской школы кройки и шитья
                 <br> вместе с теми ,кто уже прошел наши курсы</p>
                <div class="slider3">
                    <div class="slider-wrap">
                        <div class="sld_foto">
                            <img  src="#" data-original="img/gl1.jpg" alt="">
                        </div>
                        <div class="sld_foto">
                            <img  src="#" data-original="img/gl2.jpg" alt="">
                        </div>
                        <div class="sld_foto">
                            <img  src="#" data-original="img/gl3.jpg" alt="">
                        </div>
                        <div class="sld_foto">
                            <img  src="#" data-original="img/gl4.jpg" alt="">
                        </div>
                        <div class="sld_foto">
                            <img  src="#" data-original="img/gl5.jpg" alt="">
                        </div>
                    </div>
                    <div class="slide-control">
                        <div class="arr left" id="arr1l">
                        </div>
                        <div class="arr right" id="arr1r">
                        </div>
                    </div>
                </div>
                <a href="./gallery.php" class="gotogall y_button">Перейти в галерею</a>
            </div>
            <div id="our_team_wrap">
                
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
                    <div class="obychenie "><span>График обучения:</span></div>
                </div>
                <div class="kln td1">
                    <div class="groups"><span>Утренние:</span></div>
                    <div class="obychenie mytb"><span>с 11 до 14 <br>будни</span></div>
                </div>
                <div class="kln td2">
                    <div class="groups"><span>Дневные:</div>
                    <div class="obychenie mytb"><span>с 15 до 18 <br>будни</span></div>
                </div>
                <div class="kln td3">
                    <div class="groups"><span>Вечерние:</div>
                    <div class="obychenie mytb"><span>с 18 до 12 <br>будни</span></div>
                </div>
                <div class="kln td4">
                    <div class="groups"><span>Группа выходного дня</div>
                    <div class="obychenie mytb"><span>с 10 до 13 <br>Сб и Вс</span></div>
                </div>
                <div class="kln td5">
                    <div class="groups"><span>Индивидуальное <br>обучение</span></div>
                    <div class="obychenie dt5 mytb">
                        <span>график подбирается индивидуально</span>
                    </div>
                </div>
            </div>
            <div class="texnologja" id="courses_slider">
                
            </div>
            <a href="./kyrsi.php" class="kyrsu">Смотреть все курсы</a>
        </div>
    </section>
    <section id="contacts" class="sec6">
        <div>
            <p class="contacts">Контакты</p>
            <div class="l_foot">
                <div class="map"></div>
                <div class="adrs">Адрес <br><?php include('settings/adr.txt'); ?>
                </div>
            </div>
            <div class="r_foot">
                <form class="form"  action="#" method="get">
                    <p class="xotite">Остались вопросы? <br> <span class="bl">Закажите</span> <span class="pink">обратный звонок</span></p>
                    <div class="zajavka">Наш менеджер перезвонит вам в <br> ближайшее время и ответит на <br> оставшиеся вопросы</div>
                    <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                    <input type="text" name="phone" class="input" placeholder="Телефон">
                    <input type="hidden" name="frmid" value="Контакты">
                    <button class="frm y_button">Заказать звонок</button>
                </form>
            </div>
        </div>
    </section>
    <?php include('html/footer.php'); ?>
    <div class="hidden-box" id="index_modals">
        
    </div>
     
     
</body>
</html>