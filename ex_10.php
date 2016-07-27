<?php
function print_film_from_nbr($nbr)
{
  if (is_int($nbr))
  {
    switch($nbr)
    {
      case 3:
      echo "Les trois freres\n";
      break;
      case 6:
      echo "Sixieme sens\n";
      break;
      case 23:
      echo "Le nombre 23\n";
      break;
      case 28:
      echo "28 jours plus tard\n";
      break;
      default:
      echo "Je ne connais pas\n";

    }
  }
}
print_film_from_nbr(3);
