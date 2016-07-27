<?php
function print_array($arr)
{
  foreach ($arr as $key => $valeur)
  {
    echo 'key => ' . $key . ', value => ' . $valeur  . "\n";
  }
}

print_array([1, 2, 3, 4, 5]);
