<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>会員認証画面</title>
    </head>
    <body>
        <h1>会員認証画面</h1>
        <form method='post' action='result02.php'>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <td>ログインID</td>
                    <td><input type="text" name="id" placeholder="ログインIDを入力してください" /></td>
                </tr>
                <tr>
                    <td>パスワード</td>
                    <td><input type="password" name="password" placeholder="パスワードを入力してください" /></td>
                </tr>
            </table>
        <br>
            <input type="submit" value="ログイン">
            <input type="reset" value="リセット">
        </form>
        <?php
            $gold_id = "tomoya";//ゴールド会員
            $gold_password = "Wada";

            $reg_id = "Wada";
            $reg_password = "tomoya";//通常会員

            if($gold_id == $_POST['id'] AND  $gold_password == $_POST['password']){
                echo "【GOLD】ようこそ". $gold_id . "さん！";
            }elseif($reg_id == $_POST['id'] AND $reg_password ==  $_POST['password']) {
                echo "【レギュラー】ようこそ" . $reg_id . "さん";
            }else{
                echo "（警告）ログインIDとパスワードが間違っています";
            }
        ?>
    </body>
</html>
