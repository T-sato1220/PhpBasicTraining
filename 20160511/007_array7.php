<?php
$a = array(
    0 => Array(

    0 => 'AAA',
    1 => 'BBB',
    2 => 'CCC',
),
    1 => Array(

    0 => 'AAB',
    1 => 'BBC',
    2 => 'CCD',
 ),
    2 =>Array(

    0 => 'ABB',
    1 => 'BCC',
    2 => 'CDD',
 ),
  );

var_dump($a);
echo "<br><br><br>";


foreach( $a as $key1 => $val1 ){
    echo $key1.'<br>';
    echo "-----------<br>";
  foreach( $val1 as $key2 => $val2 ){
    echo "|".$key1 ."｜". $key2. "｜" .$val2." |<br />";
    echo "-----------<br>";
  }
}
 ?>.
