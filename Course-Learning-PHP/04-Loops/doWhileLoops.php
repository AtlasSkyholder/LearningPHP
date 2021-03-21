<?php
  $i = 0;

  do {
    echo "<p>$i</p>";
    $i++;
  } while ( $i < 10 );

  while( $i < 10) {
    echo "<p>$i</p>";
  }

  // the difference between these loops is that if $i is set to 10, the do while loop will execute once, the while loop will never execute.
?>