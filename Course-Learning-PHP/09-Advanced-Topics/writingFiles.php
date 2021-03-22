<?php
  $text = file_get_contents( 'treasure_island.txt' );
  echo file_put_contents( 'ti-copy.txt', $text, FILE_APPEND);
?>