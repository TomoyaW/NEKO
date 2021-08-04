<!DOCTYPE html>
<html>
<div id="calculator" class="calc">
  <input type="radio" name="currency" id="yen" value="yen" checked>
  <label for="yen">円</label>
  <input type="radio" name="currency" id="dollar" value="dollar">
  <label for="dollar">ドル</label>
  <input type="text" id="with_tax" name="with_tax" placeholder="税込み価格（半角数字）">
  <input type="text" id="tax_rate" name="tax_rate" placeholder="税率（半角数字）">
  <button id="calculate" name="calculate">実行</button>
  <input type="text" id="without_tax" name="without_tax" placeholder="税抜き価格（結果）">
  <input type="text" id="tax" name="tax" placeholder="税額（結果）">
</div>
