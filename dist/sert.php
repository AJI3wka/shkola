<?php include('ajax/amo_helper.php'); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta id="viewport" name="viewport" content="width=device-width">
        <?php include('html/meta.html'); ?>


        <!-- <!-- <script src="http://localhost:0000/livereload.js"></script> --> --> 
        <link rel="stylesheet" href="css/libs.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/scripts.css">

    
</head>

<body>
        
        <?php include('html/header.php'); ?>
<section class="sec9">
    <div>
        <div class="pink">
            <div class="polosa"></div>
            <div class="kyrsi_ceni">Подарочный сертификат</div>

        </div>
        <p class="krs">Подари любимым обучение<br> в Женской школе кройки и шитья</p>
        <div class="l_sert">
            <div class="ft_1">
                <img src="img/st1.jpg" alt="">
            </div>
            <div class="ft_2">
                <img src="img/st2.jpg" alt="">
            </div>
        </div>
        <div class="r_sert">Что такое обучение в Женской школе кройки и шитья?<br>  Это не раскрученные курсы, где показывают основы швейного<br>
                        мастерства за 1-2 часа. Это профессиональная школа для женщин<br>
                        с углубленным изучением портновского дела. Через два месяца<br>
                        занятий наши ученицы становятся профессиональными портными.<br> Многие открывают собственное швейное дело, другие отказываются<br>
                        от вещей в масс-маркетах и создают гардероб для всей семьи<br>
                        своими руками.<br><br>

                        В школе представлены четыре основных курса. Каждый из них<br>
                        преподают мастера с более чем 20-летним опытом работы не только<br>
                        в портновской, но и преподавательской сфере. Благодаря их опыту<br>
                        девушкам легко осваивать даже самые сложные этапы обучения.<br> И за один курс они самостоятельно создают от трех вещей.<br><br>

                        Основной курс «Технологии пошива, 1 ступень» рассчитан на новичков<br>
                        в швейной деле и тех, кто обучался дома самостоятельно, но хочет<br>
                        стать профессионалом. Для многих выпускниц школа стала отправной<br>
                        точкой к новым возможностям. А что может быть лучше подарка,<br>
                        в котором заложены новые знания?<br><br>

                        Вы можете подарить курс своей маме, любимой подруге или супруге.<br>
                        Каждая из них скажет вам огромное спасибо за заботу и еще<br>
                        не раз отблагодарит новыми вещами и счастливой улыбкой.<br><br>

                        Мы позаботились об оформлении подарка — сертификат<br>
                        предоставляется в формате А4, украшенный аккуратной рамкой.
                    </div>
                    <button class="present" data-id="prsnt">Заказать подарок</button>
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
        <div class="pop_present" id="prsnt">
        <form class="form"  action="#" method="get">
            <p class="xotite">Оставить заявку для покупки <br><span class="pink">подарка близким?</span></p>
            <input type="text" name="name" class="input" placeholder="Введите ваше имя">
            <input type="text" name="phone" class="input" placeholder="Телефон">
            <input type="hidden" name="frmid" value="Индивидуальное"> 
            <button class="frm">Оставить заявку</button> 
        </form>
    </div>
    </div>
    </div> 
<!--<div id="maket"></div>-->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>    
    <script src="js/init.min.js"></script>
</body>

</html>