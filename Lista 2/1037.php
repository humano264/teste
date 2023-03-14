<?php
$val = floatval(fgets(STDIN));

if ($val >= 0 && $val<= 25)

{
echo "Intervalo [0,25]\n";
} elseif ($val> 25 && $val <= 50)

{
echo "Intervalo (25,50]\n";
} elseif ($val > 50 && $val<= 75)

{
echo "Intervalo (50,75]\n";
} elseif ($val > 75 && $val <= 100)

{
echo "Intervalo (75,100]\n";
} else

{
echo "Fora de intervalo\n";
}
?>