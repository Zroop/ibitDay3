<?php
function print_until($valeur)
{
  if (!is_int($valeur))
  {
    return "Ce n'est pas valide\n";
  }
  if ($valeur < 0)
  {
    echo "Nnuche !\n";
    return false;}
  $i = 0;
  while ($i <= $valeur)
  {
    echo "$i\n";
    $i++;
  }
  return TRUE;
}
var_dump(print_until(3));
