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
            $gold_id = "tomoya";//ゴールド会員
            $gold_password = "Wada";

            $reg_id = "Wada"
            $reg_pasuword = "tomoya"//通常会員

            if($gold_id == $_POST['id'] == $id AND $gold_id==$_POST['password']){
                echo "【GOLD】ようこそ". $id . "さん！";
            }else if($_POST['id'] == $id AND $_POST['password'] != $password) {
                echo "【レギュラー】ようこそ" . $reg_id . "さん";

            }else if($_POST['id'] == $id AND $_POST['password'] != $password) {
                echo "（警告）パスワードが間違っています";
            }else if($_POST['id'] != $id AND $_POST['password'] == $password){
                echo "（警告）ログインIDが間違っています";
            }else{
                echo "（警告）ログインIDとパスワードが間違っています";
            }
        ?>
    </body>
</html>
