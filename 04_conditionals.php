<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!';
} else {
  echo 'Sorry, you are too young to vote.';
}

// Dates
// $today = date("F j, Y, g:i a");

$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts';
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';

$firstPost = !empty($posts[0]) ? $posts[0] : null;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

var_dump($firstPost);

/* -------- Switch Statements ------- */

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}
