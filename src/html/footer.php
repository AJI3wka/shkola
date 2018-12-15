<footer class="pop_met">
    <div>
        
        
        <div class="logo_f"></div>
        <div class="soc_f">
            <p class="h3">Социальные сети:</p>
            <a href="<?php include('settings/vk.txt') ?>" class="vk" target="_blank"></a>
            <a  href="<?php include('settings/insta.txt') ?>" class="inst" target="_blank"></a>
            <p class="gskw">#ЖШКШ</p>
        </div>
        <div class="nmbphone">
            <p class="number">Номер телефона</p>
            <a href="tel:<?php $text = file_get_contents('settings/phone.txt'); echo(str_replace(['-',' ','(',')'], "", $text)); ?>" class="num"><?php include('settings/phone.txt') ?></a>
        </div>
        <button class="poleznoctb" id="pop_metodichka">
        <a class="metdwnld" href="#metodichka">Скачать полезные методички</a>
        </button>
    </div>
</footer>