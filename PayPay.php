<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet">
        <title>PayPay対応店｜電子マネーMAP</title>
    </head>
    <body>
        <header>
            <h1>PayPay対応店 一覧</h1>
        </header>
        <form action="PayPaySearch.php" method="post" style="margin-bottom: 40px">
            <input type="text" name="shopname" class="input">
        </form>
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
        <br><a href="index.php">トップページに戻る</a><br><br>
    </body>
</html>
