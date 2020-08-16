<?php
	$str = '" NGuyễN thị siNh "';
	echo $str.'<br>';
	$find =['" NGuyễN','thị','siNh "'];
	$repl =['"Nguyễn','Thị','Sinh."'];
	$str= str_replace($find, $repl, $str);
	echo $str;
?>