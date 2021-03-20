<?php
  $is_logged_in = true;

  $message = $is_logged_in ? "Welcome back!" : "Hello There";

  // print_r($message);

  $is_nice = true;

  // echo "This dog is a " . ($is_nice ? "good boy." : "bad dog.");

  $name = isset ( $name ) ? $name : 'Joe' ;  // isset is a function to check if a veriable has a value or is empty, returns a boolean

  echo $name;
?>