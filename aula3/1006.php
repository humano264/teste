<?php
$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);

$A = number_format($A, 1, ".", "");
$B = number_format($B, 1, ".", "");
$C = number_format($C, 1, ".", "");

$media = ($A * 2 + $B * 3 + $C * 5)/10;
$media = number_format($media, 1, ".", "");

echo "MEDIA = $media\n";
?> 