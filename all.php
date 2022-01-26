<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet">
        <title>全種類で検索｜電子マネーMAP</title>
    </head>
    <body>
    <div align="center">
        <table>
        <?php
         print('<header>'.'<h1>'.'「'.$_POST["shopname"].'」の検索結果'.'</h1>');
        print('<form action="all.php" method="post" style="margin-bottom: 40px">');
        print('<input type="text" name="shopname" class="input">');
        print('</form><br>');
        $file=fopen('all.csv','rb');
        $Word=$_POST["shopname"];
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
        </table>
    </div>
        <br><a href="index.html">トップページに戻る</a><br><br>
    </body>
</html>