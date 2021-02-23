<?php
$a = true ;
$b = false ;

// C False
$c = $a && $b;
printf ("%b && %b = %b", $a,$b,$c);
echo "<hr> <br>";

// C true
$c = $a || $b;
printf ("%b || %b = %b", $a,$b,$c);
echo "<hr> <br>";

// C false NOT
$c = ! $a;
printf ("! %b = %b", $a,$c);
echo "<hr> <br>";

?>

