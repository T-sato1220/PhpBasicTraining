<?php

$d[] = "グフカスタム";
$d[] = "アリオス";
$d[] = "フルアーマーZZ";
$d[] = "試作３号機";
$d[5] = "フリーダム";

foreach ( $d as $value ) {
  echo $value ."<br>";
}
$d[5] = "研修";
 echo "<br>";
foreach ( $d as $key => $value) {
echo $key ." ". $value ."<br>";
}
?>
