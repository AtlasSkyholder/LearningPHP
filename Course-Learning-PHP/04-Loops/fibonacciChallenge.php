<?php
  $a = 0;
  $b = 1;
  while ( $b < 200 ) {
    $c = $a + $b;
    if($c >= 200){
      exit;
    }
    echo "<p>$c</p>";
    $a = $b;
    $b = $c;
  }
?>