<?php
  // this is a union that allows to check for either type of variable, only for PHP 8.0 and up
  /* function double(int|float $a ) {
    return $a * 2;
  }

  echo double(3.4); */

  function math( $a, $b = 2, $op = 'multiply' ) {
    if ( 'add' == $op) {
      return $a + $b;
    } else if ( 'sub' == $op) {
      return $a - $b;
    } else if ( 'divide' == $op ) {
      return $a / $b;
    }

    return $a * $b;
  }

  echo math( 12, 4, 'add');

  /* echo math( 12, op: 'add', b: 12); */
?>