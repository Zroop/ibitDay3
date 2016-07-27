<?php
function print_positive($int)
{
  if (!is_int($int))
  {
    return 'Mauvais parametre';
  }
  if ($int > 0)
  {
    echo "$int\n  ";
  }
}
var_dump(print_positive(5.6));
