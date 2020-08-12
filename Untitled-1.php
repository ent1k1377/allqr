
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
                    <textarea autofocus autocomplete="on" name="textt" value="http://test.local/" id=""  rows="10"><?php global $text; echo $text;?></textarea>
                    <input type="submit" name="send" value="Отправить">
                </form>
            </div>
            <div class="qrCode">
                <h2>ЧТО ТАКОЕ QR-КОД:</h2>
                <p>QR код «QR - Quick Response - Быстрый Отклик» — это двухмерный штрихкод (бар-код), предоставляющий информацию для быстрого ее распознавания с помощью камеры на мобильном телефоне.</p>
                <p>При помощи QR-кода можно закодировать любую информацию, например: текст, номер телефона, ссылку на сайт или визитную карточку.</p>
                <h2>ЗДЕСЬ БУДЕТ ВАШ QR-КОД:</h2>
                <div class="qr">
                    <div class="s">
                    <?php
                        include "phpqrcode/qrlib.php";
    
                        

                        if (isset($_POST['send']) && strlen($_POST['textt']) != 0){
                            global $text;
                            $text = $_POST['textt']; 
                            $num = count(scandir('temp-qr')) - 1;
                            QRcode:: png($text, "temp-qr/qrCode$num.png", 'L', 10, 1);
                            echo "<img src='temp-qr/qrCode$num.png'>";
                            
                            
                        }
                    ?>
                   
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr>
            <div class="span">© 2020 Генератор QR кода — двухмерного штрихкода / 2D баркода.   [ для коммерческих предложений — ent1k1337@yandex.ru ]</div>
        </footer>
    </div>
</body>
</html>

