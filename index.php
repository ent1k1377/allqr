<?php if (isset($_POST['send']) && strlen($_POST['textArea']) != 0){ 
    include "phpqrcode/qrlib.php";
    global $text;
    $textArea = $_POST['textArea']; 
    $range = $_POST['range'];
    $rb = $_POST['rb'];
    $num = count(scandir('temp-qr')) - 1;
    QRcode:: png($textArea, "temp-qr/qrCode$num.png", $rb, $range, 1);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="header">
            <a href="http://test.local/"><img src="img/logo.png" alt=""></a>
            
        </div>
        <hr>
        <div class="main-content">
            <div class="section">
            
                <form method="POST">
                    <h1>Генератор QR кодов</h1>
                    <textarea autofocus autocomplete="on" name="textArea" value="http://test.local/" id=""  rows="10"><?php echo $textArea;?></textarea>
                    <div class="radioButton">
                        <span>Уровень коррекции ошибок: </span>
                        <label for="1">1 <input name="rb" type="radio" value="L" id="1" checked></label>
                        <label for="2">2 <input name="rb" type="radio" value="M" id="2" <?php if ($rb == 'M'){echo 'checked';};?>></label>
                        <label for="3">3 <input name="rb" type="radio" value="H" id="3" <?php if ($rb == 'H'){echo 'checked';};?>></label>
                        <label for="4">4 <input name="rb" type="radio" value="Q" id="4" <?php if ($rb == 'Q'){echo 'checked';};?>></label>
                    </div>
                    <div class="range">
                        <span id="my">Размер QR-кода: <?php echo $range;?></span>
                        <input type="range" oninput="testMy()" min="1" max="30" value="<?php echo $range;?>" name="range" id="line">
                    </div>
                    <input type="submit" name="send" value="Отправить">
                </form>
                <h2>ЗДЕСЬ БУДЕТ ВАШ QR-КОД:</h2>
            <div class="qr">
                        <div class="s">
                        <?php
                            echo "<img src='temp-qr/qrCode$num.png'>";
                        ?>
                        </div>
                    </div>
                
            </div>
            <div class="qrCode">
                <h2>ЧТО ТАКОЕ QR-КОД:</h2>
                <p>QR код «QR - Quick Response - Быстрый Отклик» — это двухмерный штрихкод (бар-код), предоставляющий информацию для быстрого ее распознавания с помощью камеры на мобильном телефоне.</p>
                <p>При помощи QR-кода можно закодировать любую информацию, например: текст, номер телефона, ссылку на сайт или визитную карточку.</p>
                <h2>Уровни коррекции ошибок в QR-кодах</h2>
                <p>QR-код имеет специальный механизм увеличения надежности хранения зашифрованной информации. Для кодов созданных с самым высоким уровнем надежности могут быть испорчены или затерты до 30% поверхности, но они сохранят информацию и будут корректно прочитаны. Для исправления ошибок используется алгоритм Рида-Соломона (Reed-Solomon). При создании QR-кода можно использовать один из 4 уровней коррекции ошибок. Увеличение уровня способствует увеличению надежности хранения информации, но приводит к увеличению размера матричного кода.</p>
                
            </div>
        </div>
        <footer>
            <hr>
            <div class="span">© 2020 Генератор QR кода — двухмерного штрихкода / 2D баркода.   [ для коммерческих предложений — ent1k1337@yandex.ru ]</div>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php
    };
?>
<?php
    if (!isset($_POST['send']) || !strlen($_POST['textArea']) != 0){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="header">
            <a href="http://test.local/"><img src="img/logo.png" alt=""></a>
            
        </div>
        <hr>
        <div class="main-content">
            <div class="section">
            
                <form method="POST">
                    <h1>Генератор QR кодов</h1>
                    <textarea autofocus autocomplete="on" name="textArea" value="http://test.local/" id=""  rows="10"></textarea>
                    <div class="radioButton">
                        <span>Уровень коррекции ошибок: </span>
                        <label for="1">1 <input type="radio" name="rb" value="L" id="1" checked></label>
                        <label for="2">2 <input type="radio" name="rb" value="M" id="2"></label>
                        <label for="3">3 <input type="radio" name="rb" value="H" id="3"></label>
                        <label for="4">4 <input type="radio" name="rb" value="Q" id="4"></label>
                    </div>
                    <div class="range">
                        <span id="my">Размер QR-кода: 8</span>
                        <input type="range" oninput="testMy()" min="1" max="30" value="8" name="range" id="line">
                    </div>
                    <input type="submit" name="send" value="Отправить">
                </form>
                <h2>Здесь будет ваш QR-КОД:</h2>
                <div class="qr">
                        <div class="s">
   
                        </div>
                    </div>
            </div>
            <div class="qrCode">
                <h2>ЧТО ТАКОЕ QR-КОД:</h2>
                <p>QR код «QR - Quick Response - Быстрый Отклик» — это двухмерный штрихкод (бар-код), предоставляющий информацию для быстрого ее распознавания с помощью камеры на мобильном телефоне.</p>
                <p>При помощи QR-кода можно закодировать любую информацию, например: текст, номер телефона, ссылку на сайт или визитную карточку.</p>
                <h2>Уровни коррекции ошибок в QR-кодах</h2>
                <p>QR-код имеет специальный механизм увеличения надежности хранения зашифрованной информации. Для кодов созданных с самым высоким уровнем надежности могут быть испорчены или затерты до 30% поверхности, но они сохранят информацию и будут корректно прочитаны. Для исправления ошибок используется алгоритм Рида-Соломона (Reed-Solomon). При создании QR-кода можно использовать один из 4 уровней коррекции ошибок. Увеличение уровня способствует увеличению надежности хранения информации, но приводит к увеличению размера матричного кода.</p>
                
            </div>
        </div>
        <footer>
            <hr>
            <div class="span">© 2020 Генератор QR кода — двухмерного штрихкода / 2D баркода.   [ для коммерческих предложений — ent1k1337@yandex.ru ]</div>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
    };
?>
