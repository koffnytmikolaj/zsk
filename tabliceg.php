<?php
function show($colors)
{
  for($i=0;$i<count($colors); $i++)
  {
    $elem = $i+1;
    echo "Elem $elem :$colors[$i] <br>";
  }

}
function showasoc($tab)
{
  foreach ($tab as $key => $value) {
  echo "$key to $value <br>";
  }

}
?>