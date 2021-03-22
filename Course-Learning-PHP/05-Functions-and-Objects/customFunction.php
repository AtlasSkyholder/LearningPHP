<?php
  function is_palindrome( $string ) {
    $string = strtolower( $string );  //sets all chars to lowercase
    $string = str_replace( ' ', '', $string );  // replaces space with empty

    $pal_check = ( $string == strrev( $string ) );  //reverses the string and compares with original string, returns a boolean
    return $pal_check;
  }

  $check_string = 'wow';  // now 'Wow' and 'Race Car' is also a palindrome

  if( is_palindrome( $check_string ) ) {
    echo "<p>$check_string is a palindrome</p>";
  }
?>