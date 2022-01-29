<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet">
        <title>楽天Pay対応店｜電子マネーMAP</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="icon.jpg">
        <link rel="apple-touch-icon" href="icon.jpg">
    </head>
    <body>
    <div align="center">
        <?php
        print('<br><form action="RakutenSearch.php" method="post" style="margin-bottom: 40px">');
        print('<input type="text" name="shopname" class="input" placeholder="店舗名/住所で検索">');
        print('</form>');
        print('<h3 class="pagetitle">'.'楽天Pay対応店「'.$_POST["shopname"].'」の検索結果'.'</h3>');
        print('<table>');
        $file=fopen('Rakuten1.csv','rb');
        $Word=$_POST["shopname"];
        while($row=fgetcsv($file,1024,",")) {
            if(count(preg_grep('/'.$Word.'/', $row)) > 0){
                print('<tr>');
                print('<td><h3>'.$row[0].'</h3>'.'<p class="adress">'.$row[1].' , <font color=red>'.$row[2].'</font></p>'.'</td>');
                print('</tr>');
            }
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
                <a href="iD.php"><li><img class="logo" src="pics/iDlogo.png"></li></a>
                <a href="map.html"><li><img class="logo" src="pics/Map.png"></li></a>
            </ul>
        </footer>
    </body>
</html>
