<?php
  for( $i =0; $i < 10; $i++ ) {
    echo "<p>$i</p>";
  }

  $colors = array('red', 'blue', 'green', 'yellow');

  for( $i = 0; $i < sizeof($colors); $i++){
    echo "<p>$colors[$i]</p>";
  }
?>