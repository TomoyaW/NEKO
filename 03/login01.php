<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>個人認証画面</title>
    </head>
    <body>
        <h1>個人認証画面</h1>
        <form method='POST' action='result01.php'>
            <table border="1" style="border-collapse:collapse;">
                <tr>
                    <th>ログインID：</th>
                    <td><input type="text"name="example"></td>
                </tr>
                <tr>
                    <th>パスワード：</th>
                    <td><input type="password"name="example"></td>
                </tr>
            </table>
            <input type=submit value=" ログイン ">
            <input type=reset value=" リセット">
        </form>
    </body>
</html>
