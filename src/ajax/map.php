<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Карта</title>
        <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.full&lang=ru-RU"></script>
        <script src="../js/map.min.js"></script>
    <link rel="stylesheet" href="../css/fonts.css">
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        #map {
            position: absolute!important;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1
        } 

    </style>
    <body>
        <div id="main_adrs" style="display: none;"><?php include('../settings/adr.txt'); ?></div>
        <div id="map">
        </div>

        
    </body>
</html>