<?php 
//number conversion arrays
function getArray(){
	$array = array (
	1 => "I",
	5 => "V",
	10 => "X",
	12 => "XII",
	15 => "XV",
	20 => "XX",
	28 => "XXVIII",
	30 => "XXX",
	98 => "XCVIII",
	100 => "C",
	500 => "D",
	1000 => "M"
	);
	
	return $array;
}

//compares $_GET answer if it matches with the one asked 
function getCompareArray(){

	$array2 = array (
	"I" => 1,
	"V" => 5,
	"X" => 10,
	"XII" => 12,
	"XV" => 15,
	"XX" => 20,
	"XXVIII" => 28,
	"XXX" => 30,
	"XCVIII" => 98,
	"C" => 100,
	"D" => 500,
	"M" => 1000
	);
	
	return $array2;
	
}




?>