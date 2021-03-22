<?php
  readfile( 'treasure-island.txt');

  $lines = file( 'treasure-island.txt');
  var_dump( $lines );

  $casabona = file_get_contents( 'https://casabona.org' );

  var_dump( $casabona );
?>