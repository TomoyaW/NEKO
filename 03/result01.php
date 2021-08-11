<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>個人認証画面</title>
    </head>
    <body>
        <h1>個人認証画面</h1>
        <form method='post' action='result01.php'>
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
            $id = "tomoya";
            $password = "Wada";
            if($_POST['id'] == $id AND $_POST['password'] == $password){
                echo "ようこそ". $_POST . "さん！";
            }else{
                echo "（警告）ログインIDとパスワードが間違っています";
            }
        ?>
    </body>
</html>
