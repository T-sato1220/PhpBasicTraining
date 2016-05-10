<?php
$a = ['A'=>10, 3=>2, 'Z'=>'Hello',4=>10];
var_dump($a);
echo "<br /><br />";
foreach ( $a as $key => $value) {
  echo $key .",". $value."<br />";
}
?>
