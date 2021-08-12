<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>配列の検索</title>
    </head>
    <body>
        <h1>配列の検索</h1>
        <?php
        $fruit = array("りんご", "すいか", "みかん", "なし", "イチゴ", "かき");
        var_dump($fruit);
        echo "<hr>";
        foreach($fruit as $each){
          echo $each . "<br>";
        }
        echo "<hr>";
        foreach($fruit as $key => $value){
          echo $key . "番目の要素は" . $value . "です。<br>";
            ｝
            $needle = "みかん";
            if(in_array($needle, $fruit)) {
                 echo $needle . " がfruitの要素の値に存在しています";
            } else {
                echo $needle . " がfruitの要素の値に存在しません";
            }
        ?>
    </body>
</html>
