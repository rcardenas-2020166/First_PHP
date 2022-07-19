<?php
error_reporting(E_ALL ^ E_NOTICE);
$numero1 = $_REQUEST ['numero1'];
$numero2 = $_REQUEST ['numero2'];
$numero3 = $_REQUEST ['numero3'];

 $x = $numero1;
 $a = $numero2;
 $b = $numero3;

 switch ($x>$a && $x>$b){
	 
   case "1":
     echo "$x es el numero mayor";
     break;
   default: 
  
 }
 
 switch ($a>$x && $a>$b){ 
   case "1":
     echo "$a es el numero mayor";
     break;
   default:
 }
 
 
 switch ($b>$x && $b>$a){ 
   case "1":
     echo "$b es el numero mayor";
     break;
   default:
 }

echo"<br>";

switch ($x<$a && $x>$b){
	case "1":
	echo "$x es el numero intermedio";
	break;
}

switch ($x>$a && $x<$b){
	case "1":
	echo "$x es el numero intermedio";
	break;
}

switch ($b<$a && $b>$x){
	case "1":
	echo "$b es el numero intermedio";
	break;
}

switch ($b>$a && $b<$x){
	case "1":
	echo "$b es el numero intermedio";
	break;
}

switch ($a<$b && $a>$x){
	case "1":
	echo "$a es el numero intermedio";
	break;
}

switch ($a>$b && $a<$x){
	case "1":
	echo "$a es el numero intermedio";
	break;
}

echo "<br>";
 
 switch ($x<$a && $x<$b){
	 
   case "1":
     echo "$x es el numero menor";
     break;
 }
 
 
 switch ($a<$x && $a<$b){ 
   case "1":
     echo "$a es el numero menor";
     break;
 }
 
  switch ($b<$x && $b<$a){ 
   case "1":
     echo "$b es el numero menor";
     break;  
 }


