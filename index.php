<?php

header('Content-Type: text/html; charset=Shift_JIS');

mb_internal_encoding("Shift_JIS");

// echo chr(hexdec("81")) . chr(hexdec("41"));

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<h1>Shift_JISの2バイトコード</h1>

<table class="table table-bordered">
<thead>
<tr>
  <th></th>
  <?php for ($i = hexdec("40"); $i <= hexdec("e4"); $i++) echo "<th>" . dechex($i) . "</th>" ?>
</tr>
</thead>
<tbody>
<tr>
<?php
for ($i = hexdec("81"); $i <= hexdec("9f"); $i++) {
  echo "<tr>";
  echo "<th>" . dechex($i) . "</th>";
  for ($j = hexdec("40"); $j <= hexdec("e4"); $j++) {
    echo "<td>" . chr($i) . chr($j) . "<br>" . "<code>" . dechex($i) . dechex($j) . "</code>" . "</td>";
  }
  echo "</tr>";
}
?>
<?php
echo "<tr>";
echo "<th style='height: 3.5rem'>" . "</th>";
for ($j = hexdec("40"); $j <= hexdec("e4"); $j++) {
  echo "<td>" . "</td>";
}
echo "</tr>";
for ($i = hexdec("e0"); $i <= hexdec("ef"); $i++) {
  echo "<tr>";
  echo "<th>" . dechex($i) . "</th>";
  for ($j = hexdec("40"); $j <= hexdec("e4"); $j++) {
    echo "<td>" . chr($i) . chr($j) . "<br>" . "<code>" . dechex($i) . dechex($j) . "</code>" . "</td>";
  }
  echo "</tr>";
}
?>
</tr>
</tbody>
</table>

