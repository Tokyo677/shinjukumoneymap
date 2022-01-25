<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PayPay対応店｜電子マネーMAP</title>
    </head>
    <body>
    <div align="center">
        <?php
        $file=fopen('PayPay対応店 Page5.csv','rb');
        $Word=$_POST["shoplist"];
        while($row=fgetcsv($file,1024,",")) {
            mb_convert_variables("UTF-8", "SJIS", $row); 
            if(count(preg_grep('/'.$Word.'/', $row)) > 0){
                print('<tr>');
                print('<td><h3>'.$row[0].'</h3>'.'<p class="adress">'.$row[1].' , <font color=red>'.$row[2].'</font></p>'.'</td>');
                print('</tr>');
            }
        }
        fclose($file);
        ?>
    </div>
        <br><a href="index.html">トップページに戻る</a><br><br>
    </body>
</html>