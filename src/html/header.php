<header>
    <div>
        <div class="header">
            <div class="ibw">
                <div class="nav">
                    <a href="./" class="nv1 scrollto">Главная</a>
                    <a href="./#whyus" class="nv2 scrollto" id="#whyus">Почему мы</a>
                    <a href="./#ourteam" class="nv3 scrollto" id="#ourteam">Команда</a>
                    <a href="./kyrsi.php" class="nv4">Курсы и цены</a>
                    <a href="./otzivi.php" class="nv5">Отзывы</a>
                    <a href="./gallery.php" class="nv6">Фотогалерея</a>
                    <a href="./#contacts" class="nv7 scrollto" id="#contacts">Контакты</a>
                </div>
                <div class="ibw pop_met">
                    <button class="bonus"id="pop_metodichka">получить бонус</button> 
                   <div class="call">
                        <a href="tel:<?php $text = file_get_contents('settings/phone.txt'); echo(str_replace(['-',' ','(',')'], "", $text)); ?>" class="phone"><?php include('settings/phone.txt') ?></a>
                        
                        <div class="phoneback">заказать звонок</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
