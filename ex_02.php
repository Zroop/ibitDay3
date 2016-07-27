<?php
function print_status($int)
{
  if ($int < 18 && is_int($int) && $int > 0)
  {
    echo "Je suis encore mineur\n";
  }
  else
  {
    echo "Youpi, je suis majeur!\n";
  }
}
