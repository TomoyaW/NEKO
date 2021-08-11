<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>行数/列数指定テーブル</title>
  </head>

  <body>
      <h1>行数/列数指定テーブル</h1>
      <form method='post' action='loop02.php'>
          <input type="text" name="gyo" placeholder= "整数を入力" size="8">行 x
          <input type="text" name="retu" placeholder= "整数を入力" size="8">列
          <br><br>
          <input type="submit" value="送信">
          <input type="reset" value="取り消し">
      <br><br>
      <table border="1" style="border-collapse:collapse;">
          <?php
          for($i=1;$i<=$_POST['gyo'];$i++){
            if($i%2==0){
                 echo "<tr bgcolor='#f0fff0'>";
            }else{
                 echo "<tr bgcolor='#add8e6'>";
            }
             for($j=1;$j<=$_POST['col'];$j++){
                 echo  "<td>セル" . $j . "</td>";
            }
                 echo "</tr>";
            }
          ?>
      </table>
      </form>
  </body>
 </html>
