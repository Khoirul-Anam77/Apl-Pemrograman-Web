<?php
//form	
	$operand1=$_REQUEST['operand1'];
	$operand2=$_REQUEST['operand2'];
	$operator=$_REQUEST['operator'];
	
//rumus	
	$perhitungan = $operand1 . $operator . $operand2;
	eval ("\$hasil = $perhitungan;");
	echo "Hasil Perhitungan : <B>$hasil</B>";
	
?>

