<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet">
        <title>楽天Pay対応店｜電子マネーMAP</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <header>
            <h1>楽天Pay対応店 一覧</h1>
        </header>
        <form action="RakutenSearch.php" method="post" style="margin-bottom: 40px">
            <input type="text" name="shopname" class="input">
        </form>
    <div align="center">
        <table>
        <?php
        $file=fopen('Rakuten1.csv','rb');
        while($row=fgetcsv($file,1024,",")) {
                print('<tr>');
                print('<td><h3>'.$row[0].'</h3>'.'<p class="adress">'.$row[1].' , <font color=red>'.$row[2].'</font></p>'.'</td>');
                print('</tr>');
        }
        fclose($file);
        ?>
        </table>
    </div>
        <br><a href="index.php">トップページに戻る</a><br><br>
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
