<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>電子マネーマップ</title>
        <link href="main.css" rel="stylesheet">
        <link rel="manifest" href="manifest.json">
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
    </body>
</html>
