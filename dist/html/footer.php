<footer>
    <div class="logo_f"></div>
    <div class="soc_f">
        <p class="h3">Социальные сети:</p>
        <div class="vk"></div>
        <div class="inst"></div>
        <p class="gskw">#ЖШКШ</p>
    </div>
    <div class="nmbphone">
        <p class="number">Номер телефона</p>
        <a href="tel:<?php $text = file_get_contents('settings/phone.txt'); echo(str_replace(['-',' ','(',')'], "", $text)); ?>" class="num"><?php include('settings/phone.txt') ?></a>
    </div>
    <button class="poleznoctb">
    <a class="metdwnld" href="#metodichka">Скачать полезные методички</a>
    </button>
</footer>