<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>行指定表出力</title>
    </head>
    <body>
        <h1>行指定表出力</h1>
        <form method='post' action='loop01.php'>
            <p>整数を入力してください。</p>
                <input type="text" name="num" placeholder="整数を入力" />
                <br><br>
                <input type="submit" value="送信">
                <input type="reset" value="リセット">
            <table border="1" style="border-collapse:collapse;">
                <?php
                for($i=1;$i<=$_POST['num'];$i++){
                    echo "<tr><td>矢吹</td><td>石井</td><td>和田</td>";
                    }
                ?>
            </table>
        </form>
    </body>
</html>
