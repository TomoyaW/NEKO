<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/tax.css">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>¥消費税計算ページ</title>
  </head>
  <body>
    <h1>¥消費税計算ページ</h1>
        <form method='post' action='tax.php'>
        <table border="1" class="table-primary" style="border-collapse:collapse;">
            <tr>
                <th>商品名</th>
                <th>税抜き価格</th>
                <th>個数</th>
                <th>税率</th>
            </tr>
            <tr>
                <td><input type="text" name="namae1" size="20" ></td>
                <td><input type="text" name="nedan1" size="20" ></td>
                <td><input type="text" name="kosuu1" size="3" >個</td>
                <td>
                <label><input type="radio" name="tax1" value="8" > 8%</label>
                <label><input type="radio" name="tax1" value="10" size="10" checked> 10%</label>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="namae2" size="20" ></td>
                <td><input type="text" name="nedan2" size="20" ></td>
                <td><input type="text" name="kosuu2" size="3" >個</td>
                <td>
                <label><input type="radio" name="tax2" value="8" > 8%</label>
                <label><input type="radio" name="tax2" value="10" checked> 10%</label>
                </td>
            </tr>
            </tr>
            <tr>
                <td><input type="text" name="namae3" size="20" ></td>
                <td><input type="text" name="nedan3" size="20" ></td>
                <td><input type="text" name="kosuu3" size="3" >個</td>
                <td>
                <label><input type="radio" name="tax3" value="8" > 8%</label>
                <label><input type="radio" name="tax3" value="10" checked> 10%</label>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="namae4" size="20" ></td>
                <td><input type="text" name="nedan4" size="20" ></td>
                <td><input type="text" name="kosuu4" size="3" >個</td>
                <td>
                <label><input type="radio" name="tax4" value="8" > 8%</label>
                <label><input type="radio" name="tax4" value="10" checked> 10%</label>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="namae5" size="20" ></td>
                <td><input type="text" name="nedan5" size="20" ></td>
                <td><input type="text" name="kosuu5" size="3" >個</td>
                <td>
                <label><input type="radio" name="tax5" value="8" > 8%<label>
                <label><input type="radio" name="tax5" value="10" checked> 10%</label>
                </td>
            </tr>
        </table>
        <br>
            <input type="submit" value="送信" />　
            <input type="reset" value="取り消し" />
        </form>
        <br>

        <table border="1" style="border-collapse:collapse;">
            <tr>
                <th>商品名</th>
                <th>価格（単位：￥、税抜き）</td>
                <th>個数</th>
                <th>税率</th>
                <th>小計（単位：￥）</th>
            </tr>

            <tr>
                <td colspan="4" style="text-align:left;">合計</td>
                <td><?php echo $price_sum;?></td>
            </tr>
        </table>
  </body>
</html>
