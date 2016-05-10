<?php

for( $i=0;;$i++ ){
  if( $i===10 ){
    echo "ループ抜けるよ\n";
        break;
  }else if($i === 5){
        continue;
  }
    echo $i . "</br>";
}
?>
