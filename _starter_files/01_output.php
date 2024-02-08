<?php
/* -------- Output & Comments ------- */

// echo - Output string, numbers, html, etc
// echo 123, 'Hello', 10.5;

// print - Works like echo, but can only take in a single argument
// print 123;

// print_r() - Print single values and arrays
// print_r([1, 2, 3]);

// var_dump() - Returns more info like data type and length
// var_dump('Hello');

// var_export() - Similar var_dump(). Outputs a string representation of a variable
// var_export('Hello');

// Code above usually used for debugging

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/


/*
  <?=  ?> can be used instead of <?php echo ?> 
  MUST USE SEMICOLONS!
*/  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?= 'Sha Sha';?></h1>
</body>
</html>