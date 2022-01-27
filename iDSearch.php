<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet">
        <title>iD対応店｜電子マネーMAP</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <br>
    <div align="center">
        <table>
        <?php
        print('<form action="iDSearch.php" method="post" style="margin-bottom: 40px">');
        print('<input type="text" name="shopname" class="input" placeholder="検索するテキストを入力">');
        print('</form><br>');
        print('<h3 class="pagetitle">'.'iD対応店「'.$_POST["shopname"].'」の検索結果'.'</h3>');
        $file=fopen('iD.csv','rb');
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
