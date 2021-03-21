<?php
  // Simple math
  $a = 3;
  $b = 5;
  $c = $a + $b;
  echo $c;
  $total = 1 + (4 * 8) - 3;
  echo $total; 
  
  //even and odd with modulus - %
  $a = 5;
  if( $a % 2 == 0 ) {
    echo "<p>$a is even.</p>";
  } else {
    echo "<p>$a is odd.</p>";
  }

  $a = 15;
  $b = 5;
  
  echo ( $a % $b == 0 ) ? "<p>$b is a factor of $a</p>" : "<p>$b is not a factor of $a</p>";

  echo -$a % 2;

  // increment and decrement the values of variables

  $a = 5;
  //this will still be 5
  echo 'The value of $a is ' . $a++ . '<br/>';
  //this will be 6
  echo 'Now $a is ' . $a . '<br/>';

  $a = 5;
  //this will be 6
  echo 'The value of $a is ' . ++$a . '<br/>';
  //This will still be 6
  echo 'Now $a is ' . $a . '<br/>';

  //increments and decrements can also be used for alphabet char

  $a = 'A';
  echo '$a is ' . ++$a . '<br/>'; //output should be $a is B
?>