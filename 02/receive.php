<!DOCTYPE html>
<html>
  <head>
      <BODY BGCOLOR="yellow">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>WDイーツ注文トッピングフォーム</title>
  </head>
  <body>
    <h1>WDイーツ注文トッピングフォーム</h1>
    <form method='get' action='receive.php'>
<table border="1" style="border-collapse:collapse;">
<tr>
<td>氏名：</td>
<td><input type=text name="namae"></td>
</tr>
<tr>
<td>個数：</td>
<td><input type=text name=""></td>
</tr>

<td>ラーメンの種類を選んでください。</td>

 <td> <select name="browser" size=5>
    <option value="Ch">小ラーメン</option>
    <option value="Fx">中ラーメン</option>
    <option value="Op">大ラーメン</option>
    <option value="Sa">小豚</option>
    <option value="IE8">中豚</option>
    <option value="IE9">大豚</option>
</select></td>
  <tr>
<td>種類：</td>
<td>
<input type=radio name="seibetsu" value="male" checked>汁なし
<input type=radio name="seibetsu" value="female">普通
</td>
</tr>
<tr>
<td>トッピング：</td>
<td>
<input type=checkbox name="shumi" value="PC">ニンニク
<input type=checkbox name="shumi" value="SP">アブラ
<input type=checkbox name="shumi" value="RD">ヤサイ
<input type=checkbox name="shumi" value="PC">カラメ
<input type=checkbox name="shumi" value="SP">タマゴ
<input type=checkbox name="shumi" value="RD">ライス
<input type=checkbox name="shumi" value="PC">黒ウーロン茶
<input type=checkbox name="shumi" value="SP">生ビール
<input type=checkbox name="shumi" value="RD">ブレスケア
</td>
</tr>
<tr>
<td></td>
<td>
</table>
<input type=submit value=" 送信 ">
<input type=reset value=" 取消 ">
</td>
</tr>
</form>

<?php
echo $_GET['namae'] . '様、ご注文ありがとうございます。';
?>



</html>
