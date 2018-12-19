<?php include('ajax/amo_helper.php'); ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta id="viewport" name="viewport" content="width=device-width">
        <?php include('html/meta.html'); ?>
        <!-- <script src="http://localhost:0000/livereload.js"></script> -->
        <link rel="stylesheet" href="css/libs.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/scripts.css">
        <style>
            <?php include('css/head.min.css'); ?>
        </style>
    </head>
    <body>
        <?php include('html/header.php'); ?>
        <section class="sec7">
            <div>
                <div class="pink">
                    <div class="polosa"></div>
                    <div class="kyrsi_ceni">Курсы и цены</div>
                </div>
                <p class="krs">Курсы Женской школы кройки и шитья</p>
                <p class="krs_txt">В Женской школе кройки и шитья разработаны курсы для разного уровня.
                    <br> Вы можете подобрать подходящий, независимо от вашего графика
                <br> и умения шить.</p>
                <div class="grafik">
                    <div class="kln td_head">
                        <div class="groups"><span>Группы:</span></div>
                        <div class="obychenie"><span>График обучения</span></div>
                    </div>
                    <div class="kln td1">
                        <div class="groups"><span>Утренние</span></div>
                        <div class="obychenie mytb"><span>с 11 до 14
                        <br>будни</span></div>
                    </div>
                    <div class="kln td2">
                        <div class="groups"><span>Дневные:</span></div>
                        <div class="obychenie mytb"><span>с 15 до 18
                        <br>будни</span></div>
                    </div>
                    <div class="kln td3">
                        <div class="groups"><span>Вечерние:</span></div>
                        <div class="obychenie mytb"><span>с 18 до 12
                        <br>будни</span></div>
                    </div>
                    <div class="kln td4">
                        <div class="groups"><span>Группа выходного дня</span></div>
                        <div class="obychenie mytb"><span>с 10 до 13
                        <br>Сб и Вс</span></div>
                    </div>
                    <div class="kln td5">
                        <div class="groups"><span>Индивидуальное
                        <br>обучение</span></div>
                        <div class="obychenie dt5 mytb">
                            <span>график подбирается индивидуально</span></div>
                        </div>
                    </div>
                    <div class="l_t">
                        <div class="ceni">
                            <div class="slide-control">
                                <div class="arr left" id="arr1l_ceni">
                                </div>
                                <div class="arr right" id="arr1r_ceni">
                                </div>
                            </div>
                            <div class="kyrsi">
                                <a href="#t1" class="ceni_kyrsi active" data-id="1">
                                    <img src="img/tn1.jpg" alt="">
                                    <p class="name">Технология пошива ,<br><span>1 ступень</span></p>
                                    <div class="helper"></div>
                                </a>
                                <a href="#t2" class="ceni_kyrsi" data-id="2">
                                    <img src="img/tn2.jpg" alt="">
                                    <p class="name">Технология пошива ,<br><span>2 ступень</span></p>
                                    <div class="helper"></div>
                                </a>
                                <a href="#t3" class="ceni_kyrsi" data-id="3">
                                    <img src="img/tn3.jpg" alt="">
                                    <p class="name">Курс: Пальто</p>
                                    <div class="helper"></div>
                                </a>
                                <a href="#t4" class="ceni_kyrsi" data-id="4">
                                    <img class="" src="img/tn7.jpg" alt="">
                                    <p class="name">Курс: Нижнее белье</p>
                                    <div class="helper"></div>
                                </a>
                                <a href="#t5" class="ceni_kyrsi" data-id="5">
                                    <img class="" src="img/tn5.jpg" alt="">
                                    <p class="name">Конструирование<br>и моделирование</p>
                                    <div class="helper"></div>
                                </a>
                                <a href="#t6" class="ceni_kyrsi" data-id="6">
                                    <img class="" src="img/tn6.jpg" alt="">
                                    <p class="name">Индивидуальное<br>обучение</p>
                                    <div class="helper"></div>
                                </a>
                                <a href="#t7" class="ceni_kyrsi" data-id="7">
                                    <div class="akcii_wrp">%</div>
                                    <p class="name">Наши акции</p>
                                    <div class="helper"></div>
                                </a>
                            </div>
                        </div>
                        <div class="slider9">
                            <div class="slider-wrap_ceni">
                                <div class="item active" data-id="1" id="t1">
                                    <div class="r_t">
                                        <div class="teksta">
                                            <p class="txt_1">
                                                Технология пошива ,<br>
                                                <span>1 ступень</span>
                                            </p>
                                            <p class="txt_2">Для новичков и тех, кто обучался дома самостоятельно
                                                <br>Погружаем учеников в швейное дело и учим
                                            <br>профессионально шить одежду для себя</p>
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
                                                <p class="pnk">скидка 10% на все последующие обучения <br>
                                                в нашей школе</p>
                                            </div>
                                            <p class="txt_7">
                                                Группы: <span>утренние, дневные, вечерние и группы<br>выходного дня</span>
                                            </p>
                                            <p class="txt_8">16 практических занятий (2 месяца)<br>
                                            2 раза в неделю по 3 часа каждое</p>
                                            <div class="skidka">
                                                <p class="sk1">8 450 рублей<span class="noy"><span class="month">/месяц</span></span></p>
                                                <p class="sk2">6 950 рублей<span class="noy"><span class="month">/месяц</span></span></p>
                                            </div>
                                        </div>
                                        <p class="dlina">Длительность курса 2 месяца</p>
                                        <button class="zapisb y_button" data-id="texn_poshiv1">Записаться на курс</button>
                                        <button class="podrobno" data-id="pdrb">Подробнее о курсе</button>
                                        
                                    </div>
                                </div>
                                <div class="item" data-id="2" id="t2">
                                    <div class="r_t">
                                        <div class="teksta">
                                            <p class="txt_1">
                                                Технология пошива , <span>2 ступень</span>
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
                                                <p class="pnk">сертификат об окончании курса</p>                                                </div>
                                                <p class="txt_7">
                                                    Группы: <span>утренние, дневные, вечерние и группы<br>выходного дня</span>
                                                </p>
                                                <p class="txt_8">16 практических занятий (2 месяца)
                                                <br>2 раза в неделю по 3 часа каждое</p>
                                                <div class="skidka">
                                                    <p class="sk1">9 450 рублей<span class="noy"><span class="month">/месяц</span></span></p>
                                                    <p class="sk2">6 950 рублей<span class="noy"><span class="month">/месяц</span></span></p>
                                                </div>
                                            </div>
                                            <p class="dlina">Длительность курса 2 месяца</p>
                                            <button class="zapisb y_button" data-id="texn_poshiv2">Записаться на курс</button>
                                            
                                        </div>
                                    </div>
                                    <div class="item" data-id="3" id="t3">
                                        <div class="r_t">
                                            <div class="teksta">
                                                <p class="txt_1">
                                                    Курс: Пальто
                                                </p>
                                                <p class="txt_2">Только для тех, кто прошел наш курс Технология пошива, 1 ступень.
                                                    Обучаем пошиву верхней одежды и дарим скидку 10% на эту программу.
                                                </p>
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
                                                
                                                <div class="skidka">
                                                    <!--<p class="sk1">8 450 рублей/месяц</p>-->
                                                    <p class="sk2">9 900 рублей <span class="month"> за  курс весь</span></p>
                                                </div>
                                            </div>
                                            <p class="dlina" style="position:relative;z-index: -2;opacity:0;">Длительность курса 2 месяца</p>
                                            <button class="zapisb y_button" data-id="palto">Записаться на курс</button>
                                        </div>
                                        
                                    </div>
                                    <div class="item" data-id="4" id="t4">
                                        <div class="r_t">
                                            <div class="teksta">
                                                <p class="txt_1">
                                                    Нижнее белье
                                                </p>
                                                <p class="txt_2">Для новичков и тех, кто обладает базовыми знаниями в пошиве одежды.<br><br> Обучаем деликатному пошиву нижнего белья для женщин.<br><br> Выпускникам первой ступени — скидка 10%.</p>
                                                
                                                <p class="txt_3">
                                                    В разработке.
                                                </p>
                                                
                                                <!-- <div class="skidka">
                                                    <p class="sk1">8 450 рублей/месяц</p>
                                                    <p class="sk2">9 900 рублей за весь курс</p>
                                                </div>
                                            </div>
                                            <p class="dlina">Длительность курса 2 месяца
                                            </p>-->
                                        </div>
                                        <p class="dlina" style="position:relative;z-index: -2;opacity:0;">Длительность курса 2 месяца</p>
                                        <button class="zapisb y_button" data-id="belbe">Записаться на курс</button>
                                    </div>
                                </div>
                                <div class="item" data-id="5" id="t5">
                                    <div class="r_t">
                                        <div class="teksta">
                                            <p class="txt_1">
                                                Конструирование и моделирование.
                                            </p>
                                            <p class="txt_2">Учим создавать выкройки разной сложности.</p>
                                            <p class="txt_8">15 практических занятий (2 месяца)<br>2 раза в неделю по 3 часа каждое
                                            </p>
                                            <div class="skidka">
                                                <p class="sk1">9 450 рублей<span class="noy"><span class="month">/месяц</span></span></p>
                                                <p class="sk2">7 450 рублей<span class="noy"><span class="month">/месяц</span></span></p>
                                            </div>
                                        </div>
                                        <p class="dlina">Длительность курса 2 месяца</p>
                                        <button class="zapisb y_button" data-id="konstr_model">Записаться на курс</button>
                                    <button class="podrobno" data-id="konctr_pdrb">Подробнее о курсе</button>
                                    </div>
                                    
                                </div>
                                <div class="item" data-id="6" id="t6">
                                    <div class="r_t">
                                        <div class="teksta">
                                            <p class="txt_1">
                                                Индивидуальное обучение.
                                            </p>
                                            <p class="txt_2">Подходит тем, у кого нестандартный график работы. И кому комфортнее обучаться один на один с преподавателем.</p>
                                            <p class="txt_3">
                                                Три изделия: <span>из базового гардероба на выбор<br>(например: юбка,брюки платье)</span>
                                            </p>
                                            <p class="txt_4">
                                                Фасоны: <span>простые и средней сложности, на ваш выбор</span>
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
                                            <p class="txt_8">График: подбирается индивидуально 16 практических занятий по 3 часа каждое
                                            </p>
                                            <div class="skidka">
                                                <p class="sk1">38 680 <span class="krs">рублей</span> <span class="month">за <span class="krs">весь</span> курс</span></p>
                                               <p class="sk2">32 900 <span class="krs">рублей</span> <span class="month">за <span class="krs">весь</span> курс</span></p>
                                            </div>
                                        </div>
                                        <button class="zapisb y_button" data-id="individ">Записаться на курс</button>
                                    </div>
                                    
                                    <p class="dlina" style="position:relative;z-index: -2;opacity:0;">Длительность курса 2 месяца</p>
                                    
                                 
                            </div>
                            <div class="item" data-id="7" id="td7">
                                <div class="r_t">
                                    <div class="teksta">
                                        <p class="txt_1">
                                            Акции
                                        </p>
                                        <p class="txt_3">1. Акция 1+1: <span>Приглашайте своих подруг обучаться вместе. Тогда каждой подружке скидка 500 рублей.</span></p><br>
                                        <p class="txt_4">
                                            2. Акция для наших выпускников: <span>При прохождении первой ступени курса «Технологии пошива» дарим скидку 10% на другие курсы.</span></p>
                                        </p>
                                        <br>
                                        <p class="txt_5">
                                            3. Курс в подарок: <span>Курсы кройки и шитья дарят новые эмоции и впечатления, возможность стать профессионалом в любимом хобби и открыть свое дело. Для женщин — это глоток свежего воздуха и шаг во что-то новое.<br><br>
                                                Вы можете подарить курс своей маме, любимой подруге или супруге. Каждая из них скажет вам огромное спасибо за заботу и еще не раз отблагодарит новыми вещами и счастливой улыбкой.
                                                <br><br>
                                                Мы позаботились об оформлении подарка — сертификат предоставляется в формате А4, украшенный аккуратной рамкой.
                                            </span>
                                        </p>
                                        <a href="./sert.php" class="podrobno cntr ibd">Подробнее о подарке</a>
                                        <button class="zapisb y_button ibd"data-id="akcii">Заказать подарок</button>
                                    </div>
                                    
                                </div>
                                <p class="dlina" style="position:relative;z-index: -2;opacity:0;">Длительность курса 2 месяца</p>
                            </div>

                        </div>
                    </div>
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
                Спасибо за заявку!
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
            <div class="pop_met" id="pop_metodichka_head">
                <form class="form"  action="#" method="get">
                    <p class="xotite">Хотите получить методичку по <span class="pink">тканям</span> и <span class="pink"> швейным машинкам?</span></p>
                    <div class="zajavka">Заполните формы и получите методички</div>
                    <div class="miniatyri">
                        <div class="el"></div>
                        <div class="el"></div>
                    </div>
                    <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                    <input type="text" name="phone" class="input" placeholder="Телефон">
                    <input type="hidden" name="frmid" value="Получить бонус">
                    <button class="frm">Скачать методички</button>
                </form>
            </div>
            <div id="okgo" class="pop_z">
                <form class="form" action="#" method="get">
                    <p class="xotite">Хотите записаться
                        <br> <span class="bl">на</span> <span class="pink">курс?</span></p>
                        <div class="zajavka">Оставьте заявку, и мы свяжемся с вами. </div>
                        <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                        <input type="text" name="phone" class="input" placeholder="Телефон">
                        <input type="hidden" name="frmid" value="Форма в шапке">
                        <button class="frm">Оставить заявку</button>
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
                <div class="pop_texn" id="belbe">
                    <form class="form"  action="#" method="get">
                        <p class="xotite">Хотите записаться на курс <span class="pink">Нижнее белье?</span></p></p>
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
                <div class="pop_akcii" id="akcii">
                    <form class="form"  action="#" method="get">
                        <p class="xotite">Оставьте заявку <br><span class="pink">для покупки подарка</span></p>
                        <input type="text" name="name" class="input" placeholder="Введите ваше имя">
                        <input type="text" name="phone" class="input" placeholder="Телефон">
                        <input type="hidden" name="frmid" value="Индивидуальное">
                        <button class="frm">Оставьте заявку</button>
                    </form>
                </div>
                <div class="pop_podrobnosti" id="pdrb">
                    <div class="okyrse">
                        <div class="close"></div>
                        <p class="txt_1">
                            1. Вводная часть
                        </p>
                        <p class="txt_2">Состоит не только из теории, но и практики.</p>
                        <p class="txt_3">
                            <span>- в этом блоке вы получите общую информацию об одежде;<br><br>
                                - узнаете о разных материалах для шитья. Начнете разбираться в видах, свойствах и особенностях тканей для пошива гардероба. Сможете подобрать нужный материал для раскроя, а также подберете необходимую фурнитуру, прокладочные и отделочные ткани для будущей работы;<br><br>
                                - приступите к ручной работе, а именно научитесь ручным стежкам;<br><br>
                                - изучите виды машинных швов и освоите их на практике;<br><br>
                                - обучитесь тонкостям утюжильных работ. Сможете управляться с оборудованием <br>и изучить тонкости процесса;<br><br>
                                - изучите швейное оборудование, его виды, назначение и приемы работы;<br><br>
                                - ознакомитесь с обработкой дополнительных деталей в одежде:
                                • накладных и прорезных карманов;<br>
                                • застежек (застежка-молния и обтачками);<br>
                            • отложных, цельновыкроенных и воротников-стоек.</span>
                        </p>
                        <p class="txt_4">
                            2. Юбка : <span>Ваша первая полноценная вещь, которую вы сошьете на курсе:<br>
                                - сначала происходит замер мерок;<br>
                                - далее раскрой изделия и подготовка его к примерке. После чего вы перейдете к подгонке вещи по фигуре;<br>
                                - и приступите к пошиву юбки. А также научитесь влажно-тепловым работам со всеми тонкостями, которые включают:<br>
                                • обработку изделия, вытачек и швов;<br>
                                • работу с поясом;<br>
                                • с отделочными деталями, а именно клапанами, карманами и шлевками;<br>
                                • конечную влажно-тепловую обработку всей модели.<br>
                            </span>
                        </p>
                        <p class="txt_5">
                            3. Брюки : <span>Можете выбрать любую модель для пошива, на свое усмотрение. Пошив брюк также происходит в три основных этапа:<br>
                                - работа начинается с изготовления лекал, раскроя и подготовки брюк к примерке;<br>
                                - далее приступаете к обработке брюк и подрезке деталей;<br>
                                - потом наступает этап пошива брюк и ВТО, а именно:<br>
                                • обработка и ВТО вытачек, а также швов;<br>
                                • работа с карманами (в шве и накладных);<br>
                                • работа с поясом и отделочными элементами;<br>
                                • полноценная влажно-тепловая обработка всего изделия.<br>
                            </span>
                        </p>
                        <p class="txt_7"> 
                            4. Платье или другая деталь гардероба на ваш выбор <span>На этом этапе вы можете выбрать другое изделие, но его создание включает те же общие этапы:<br>
                                - после выбора вещи вы приступите к изготовлению лекал и раскрою изделия;<br>
                                - далее готовитесь к примерке. После вас ждет подгонка модели под вашу фигуру и внесение корректировок;<br>
                                - приступаете к первой обработке вещи, осноровке и подрезке мелких элементов;<br>
                                - этап пошива модели и ВТО схожи с предыдущими:<br>
                                • начинаете с обработки и ВТО швов;<br>
                                • далее приступаете к небольшим элементам;<br>
                                • переходите к обработке горловины, ворота и его присоединению к модели;<br>
                                • рукава также обрабатываются и соединяются с моделью;<br>
                                • под конец всегда производится ВТО всего изделия.<br>
                            </span>
                        </p>
                        <p class="txt_8">16 практических занятий (2 месяца)</p>
                    </div>
                </div>
                <div class="pop_podrobnosti" id="konctr_pdrb">
                    <div class="okyrse">
                        <div class="close"></div>
                        <p class="txt_1">
                            Программа курса «Конструирование и моделирование изделий»
                        </p>
                        <p class="txt_2">Обучение включает пять основных этапов, которые помогут вам полностью погрузиться в основы этого мастерства.</p>
                        <p class="txt_3">
                            1. Вступительная часть :
                            <span>На этом этапе вы знакомитесь с типологией, осанкой и измерением фигуры. Изучаете:<br>
                                - инструменты в работе с вещами.<br>
                                - прибавки;<br>
                                - виды и стили одежды.<br>
                            </span>
                        </p>
                        <p class="txt_4">
                            2. Юбка : <span>На этом этапе вы узнаете тонкости работы с этой деталью гардероба:<br>
                                - научитесь измерять и снимать мерки;<br>
                                - проведете расчет и построение основы прямой и конической юбок. Будете работать над разными стилями:<br>
                                • с юбкой-солнце и полусолнце;<br>
                                • моделью кроя колокол;<br>
                                • и кроя клеш.<br>
                                - научитесь строить основы клиньевого фасона (годэ и 4,6,8-ми шовные) и его моделированию:<br>
                                • изучите кокетки;<br>
                                • плиссировку;<br>
                                • подрезы;<br>
                                • драпировки;<br>
                                • и воланы.<br>
                            </span>
                        </p>
                        <p class="txt_5">
                            3. Женская плечевая одежда  (платье):
                            <span>В целом этапы схожи, но в каждом есть свои тонкости, о которых вы узнаете на курсе:<br>
                                - начнете с измерения и снятия мерок;<br>
                                - проведете расчет, а также построение основы плечевой одежды, втачных рукавов и воротников различных видов:<br>
                                • отложных;<br>
                                • плосколежащих;<br>
                                • ворота-стойки;<br>
                                - приступите к моделированию платья. Учтете такие детали как:<br>
                                • кокетки;<br>
                                • рельефные швы;<br>
                                • драпировки;<br>
                                • и подрезы.<br>
                                <br>
                            </span>
                        </p>
                        <p class="txt_7">
                            4. Женские брюки: <span>Работа с ними включает те же этапы:<br>
                                - измерение и снятие мерок;<br>
                                - расчет и построение брюк;<br>
                                - их моделирование.<br>
                            </span>
                        </p>
                        <p class="txt_5">5. Жакет с подкладкой<br>
                            <span>Состоит из двух основных этапов: построения основы жакета и его моделирования.
                            </span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="js/init.min.js"></script>
        <div id="maket"></div>
    </body>
</html>