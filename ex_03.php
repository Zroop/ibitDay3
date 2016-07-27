<?php
function print_age($age)
{
  if ($age <= 0)
  {
    echo "Enfantillages...\n";
  }
  switch ($age)
  {
    case 42:
      echo "I'm the best\n";
    default:
      echo "Ton age est cool\n";
  }
}
