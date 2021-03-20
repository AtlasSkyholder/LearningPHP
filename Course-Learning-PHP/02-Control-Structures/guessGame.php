<?php
  $min = 1;
  $max = 50;
  $guess = 16; //Change this value to test!
  $num = 16; //Change this value to test!

  // If you really want to go nuts, try this:
  //$num = rand($min, $max);
  if( $guess < $min || $guess > $max) {
    echo '<p>Your guess is out of range.</p>';
  } else {
    if ($guess > $num) {
      echo "<p>Your guess is too high.</p>";
    } else if ($guess < $num) {
      echo "<p>Your guess is too low.</p>";
    } else {
      echo "<h3>You guessed right!!</h3>";
    }
  }
?>