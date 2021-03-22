<?php
  error_reporting(E_ALL); //constant to print all errors
  $a = 2;

  if( ( $a < 2 ) ) {
    echo "Hello!";
  }

  //set_cookie( 'error', true ); //this sets E_ALL to true and shows the error
?>

<h1>Hello!</h1>
<?php
print_r( $a );
$colors = array('red', 'blue', 'green');

var_dump( $colors );
?>