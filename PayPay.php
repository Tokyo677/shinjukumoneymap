<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
        <title>PayPay対応店｜電子マネーMAP</title>
        <link rel="icon" type="image/jpg" href="icon.jpg">
        <link rel="apple-touch-icon" href="icon.jpg">
    </head>
    <body>
        <form action="PayPaySearch.php" method="post" style="margin-bottom: 40px">
            <br><input type="text" name="shopname" class="input" placeholder="店舗名/住所で検索"><br>
        </form>
        <h3 class="pagetitle">PayPay対応店 一覧</h3>
    <div align="center">
        <table>
        <?php
        $file=fopen('PayPay2.csv','rb');
        while($row=fgetcsv($file,1024,",")) {
                print('<tr>');
                print('<td><h3>'.$row[0].'</h3>'.'<p class="adress">'.$row[1].' , <font color=red>'.$row[2].'</font></p>'.'</td>');
                print('</tr>');
        }
        fclose($file);
        ?>
        </table>
    </div>
        <br><br><br>
                <footer>
            <ul>
                <a href="index.php"><li><img class="logo" src="pics/Home2.png"></li></a>
                <a class="now" href="PayPay.php"><li><img class="logo" src="pics/Paypaylogo.png"></li></a>
                <a href="Rakuten.php"><li><img class="logo" src="pics/Rakutenlogo.png"></li></a>
                <a href="iD.php"><li><img class="logo" src="pics/iDlogo.png"></li></a>
                <a href="map.html"><li><img class="logo" src="pics/Map.png"></li></a>
            </ul>
        </footer>
    </body>
</html>
