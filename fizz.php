<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>


<?php
 
 $Start = 1;
 
 while($Start < 101) {
 
 
 if ($Start % 3 == 0) {
  
	if ($Start % 5 == 0) {
	 
	echo '<p>FizzBuzz</p>';
	
} else {

 echo '<p>Fizz</p>';
} 
} else {

if ($Start % 5 == 0) {

 echo '<p>Buzz</p>';
 
 
 } else {
 
 echo '<p>'.$Start.'</p>';
}
}
 
 $Start = $Start + 1;
 
 
 
 }
 
 



?>


</body>

</html>
