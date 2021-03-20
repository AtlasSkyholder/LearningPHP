<html>
  <head>
    <title>Some Story</title>
  </head>
  <body>
    <?php
       $name = "Teresa"; // Heading 1
       $city = "NYC";
       $movie = "Star Wars"; //Italics
       $friend = "George"; //Bold
       $candy = "Sour Patch Kids";
    ?>
    <h1><?php print_r( $name) ?></h1>
    <p>traveled to <?php print_r( $city ) ?> to see a movie today with her friend.</p>
    <p>Upon arriving at the theather, <?php print_r( $name) ?> spots <b><?php print_r( $friend) ?></b>,</p>
    <p> and together, they decided to watch <i><?php print_r( $movie) ?></i>. But before they headed in,</p>
    <p><?php print_r( $name) ?> bought some <?php print_r( $candy) ?> candy.</p>
  </body>
</html>