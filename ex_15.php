<?php
function make_poneys($my_array)
{
  foreach ($my_array as $key => $valeur)
  {
    $valeur = "poney";
    echo 'key => ' . $key . ', value => ' . $valeur  . "\n";
  }
}

make_poneys([1, 2, 3, 4, 5]);
