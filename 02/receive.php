<!DOCTYPE html>
<html>
  <head>
      <BODY BGCOLOR="yellow">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>第二回課題、フォーム部品練習</title>
  </head>
  <body>
    <h1>第二回課題、フォーム部品練習</h1>
      <form method='get' action='receive.php'>
        <!--
          ここにform部品を自由に配置してみよう
          送信ボタンとリセットボタンも忘れずに
        ---><form>

      </form>WDイーツ注文トッピングフォーム

</form>
<br><br>

<form method="POST" action="xxx.cgi">
<table>
<tr>
<td>氏名：</td>
<td><input type=text name="namae"></td>
</tr>
<tr>
<td>個数：</td>
<td><input type=password name="passwd"></td>
</tr>
<td>転送ファイル：</td>
<td><input type=file name="tensou"></td>
</tr>
</form>
<head>

</head>
<body>
<H>ラーメンの種類を選んでください。
<form method="POST" action="xxx.cgi">
  <select name="browser" size=5>
    <option value="s>小ラーメン</option>
    <option value="Fx">中ラーメン</option>
    <option value="Op">大ラーメン</option>
    <option value="Sa">小豚</option>
    <option value="IE8">中豚</option>
    <option value="IE9">大豚</option>
  </select>
  <input type="submit" value="OK">
</form>
<td>種類：</td>
<td>
<input type=radio name="seibetsu" value="male" checked>汁なし
<input type=radio name="seibetsu" value="female">普通
</td>
</tr>
<tr>
<td>趣味：</td>
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
<input type=submit value=" 送信 ">
<input type=reset value=" 取消 ">
</td>
</tr>
</table>
</form>

<?php

echo "ご注文ありがとうございます。" . $_GET['namae'] . "さんの注文は". $_GET['namae'] .;?>
</body>
</html>
