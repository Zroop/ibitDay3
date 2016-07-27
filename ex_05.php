<?php
function print_range($entier)
{
  $i = 0;
  do
  {
    echo "$entier\n";
    $i++;
    $entier++;
  } while ($entier <= 42);
}
print_range(43);
