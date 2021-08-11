<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>行列数セル名表示表</title>
  </head>

  <body>
      <h1>行列数セル名表示表</h1>
      <form method='post' action='loop03.php'>
          <input type="text" name="li" placeholder= "整数を入力" size="8">行 x
          <input type="text" name="col" placeholder= "整数を入力" size="8">列
          <br><br>
          <input type="submit" value="送信">
          <input type="reset" value="取消">
      <br><br>
      <table border="1" style="border-collapse:collapse;">
          <?php
          for($i=1;$i<=$_POST['li'];$i++){
            if($i%2==0){
                 echo "<tr bgcolor='#f0fff0'>";
            }else{
                 echo "<tr bgcolor='#add8e6'>";
            }
            for($j=1;$j<=$_POST['col'];$j++){
                 echo  "<td>" . $i . "-" . $j . "</td>";
            }
                 echo "</tr>";
            }
          ?>
      </table>
      </form>
  </body>
</html>
