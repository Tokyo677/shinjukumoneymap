<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>電子マネーマップ</title>
        <link href="main.css" rel="stylesheet">
        <link rel="manifest" href="manifest.json">
        <link rel="icon" type="image/jpg" href="icon.jpg">
        <link rel="apple-touch-icon" href="icon.jpg">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <br>
        <form action="all.php" method="post" style="margin-bottom: 40px">
            <input type="text" name="shopname" class="input" placeholder="検索するテキストを入力">
        </form>
        <button onclick="location.href='iD.php'" class="money">iD</button><br><br>
        <button onclick="location.href='PayPay.php'" class="money">PayPay</button><br><br>
        <button onclick="location.href='Rakuten.php'" class="money">楽天Pay</button><br><br>
        <button onclick="location.href='map.html'" class="money">地図</button>
        <br><br>
        <footer>
            <ul>
                 <a href="index.php"><li><img class="logo" src="pics/Home2.png"></li></a>
                <a href="PayPay.php"><li><img class="logo" src="pics/Paypaylogo.png"></li></a>
                <a href="Rakuten.php"><li><img class="logo" src="pics/Rakutenlogo.png"></li></a>
                <a href="iD.php"><li><img class="logo" src="pics/iDlogo.png"></li></a>
                <a href="map.html"><li><img class="logo" src="pics/Map.png"></li></a>
            </ul>
        </footer>
    </body>
</html>
