<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet">
        <title>iD対応店｜電子マネーMAP</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,user-scalable=no">
        <link rel="icon" type="image/jpg" href="icon.jpg">
        <link rel="apple-touch-icon" href="icon.jpg">
    </head>
    <body>
        <br>
        <form action="iDSearch.php" method="post" style="margin-bottom: 40px">
            <input type="text" name="shopname" class="input" placeholder="店舗名/住所で検索">
        </form>
    <div align="center">
         <h3 class="pagetitle">iD対応店 一覧</h3>
        <table>
        <?php
        $file=fopen('iD02.csv','rb');
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
                <a href="PayPay.php"><li><img class="logo" src="pics/Paypaylogo.png"></li></a>
                <a href="Rakuten.php"><li><img class="logo" src="pics/Rakutenlogo.png"></li></a>
                <a class="now" href="iD.php"><li><img class="logo" src="pics/iDlogo.png"></li></a>
                <a href="map.html"><li><img class="logo" src="pics/Map.png"></li></a>
            </ul>
        </footer>
    </body>
</html>
