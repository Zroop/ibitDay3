<?php
function multiples($nb)
{
  for ($i = 1; $i < 150000; $i++)
  {
    if ($nb % $i ===0)
    {
      echo "$i\n";
    }
  }
}

multiples();
