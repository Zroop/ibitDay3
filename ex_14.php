<?php
function brouhaha()
{
  $i = 0;
  a:
  echo "woop\n";
  $i++;
  if ($i === 42) {
    goto end;
  }
  goto a;
  end:
}
