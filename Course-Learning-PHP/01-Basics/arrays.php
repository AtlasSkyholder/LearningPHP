<?php 

  // Indexable Array
  $colors = array ( 'blue', 'green', 'red' );

  print_r( $colors );

  echo '<p>' . $colors[1] . '</p>';

  $colors[] = 'yellow';

  print_r( $colors );

  // Associative Array
  $home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI'
  );

  echo '<pre>';
  print_r( $home_towns );
  echo '</pre>';

  echo '<p>' . $home_towns['Dave'] . '</p>';

  // Multi-Dimentional Array

  $brothers = array(
    'Joe' => array(
      'age' => 34,
      'job' => 'teacher',
      'state' => 'PA'
    ),
    'Phil' => array(
      'age' => 32,
      'job' => 'photographer',
      'state' => 'NY'
    ),
    'Mike' => array(
      'age' => 32,
      'job' => 'logistics',
      'state' => 'NY'
    ),
    'Rob' => array(
      'age' => 29,
      'job' => 'manager',
      'state' => 'FL'
    )
  );

  echo '<pre>';
  print_r( $brothers );
  echo '</pre>';

  echo '<p>' . $brothers['Rob']['state'] . '</p>';
?>