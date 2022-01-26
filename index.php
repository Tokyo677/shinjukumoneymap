<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>電子マネーマップ</title>
        <link href="main.css" rel="stylesheet">
        <link rel="manifest" href="manifest.json">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <br>
        <form action="all.php" method="post" style="margin-bottom: 40px">
            <input type="text" name="shopname" class="input">
        </form>
        <button onclick="location.href='iD.php'" class="money">iD</button><br><br>
        <button onclick="location.href='PayPay.php'" class="money">PayPay</button><br><br>
        <button onclick="location.href='Rakuten.php'" class="money">楽天Pay</button><br><br>
        <button onclick="location.href='map.html'" class="money">地図</button>
        <footer>
            <ul>
                <a href="index.php"><li>トップ</li></a>
                <a href="PayPay.php"><li>PayPay</li></a>
                <a href="Rakuten.php"><li>楽天Pay</li></a>
                <a href="iD.php"><li>iD</li></a>
                <a href="map.html"><li>地図</li></a>
            </ul>
        </footer>
    </body>
</html>
