<?php
function print_age($age)
{
  if (is_int($age) && $age > 0)
  {
    switch ($age)
    {
      case 42:
        echo "I'm the best\n";
      break;
      default:
        echo "Ton age est cool\n";
      break;
    }
   }
   else
   {
        echo "Enfantillages\n";
      }
}
print_age("fgszfgs");
