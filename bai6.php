<?php
	function kiem_tra_chuỗi_palindrome($str){
		$word ='';
		for($i = strlen($str)-1; $i>=0; $i--)
		{
			$word .= $str[$i];
		}
		if($word == $str)
		{
			echo 'Là chuỗi palindrome';
		}
		else{
			echo'Không là chuỗi palindrome';
		}
	}
	kiem_tra_chuỗi_palindrome('ZenttneZ');
	
?>
