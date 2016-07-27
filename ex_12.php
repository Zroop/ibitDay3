<?php
function is_same($val1, $val2)
{
  $type1 = gettype($val1);
  $type2 = gettype($val2);
  if ($type1 == $type2)
  {
    echo "les variables ont le meme type\n";
  }
  if ($val1 == $val2)
  {
    echo "variables ont la meme valeur\n";
  }
  if (($val1 == $val2) AND ($type1 == $type2))
  {
    echo "same type and same value\n";
  }

}
is_same('3', 3);
