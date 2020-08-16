<?php
	function sap_xep_tang_dan($arr)
	{
		echo 'Sắp xếp tăng dần trong mảng'.'<br>';
		for($i=0 ; $i< count($arr)-1; $i++){
			for($j=$i+1 ; $j<count($arr) ; $j++){
				if($arr[$i]>$arr[$j])
				{
					$tmp=$arr[$i];
					$arr[$i]= $arr[$j];
					$arr[$j]=$tmp;
				}
			}
				
		}
		for($i=0;$i<count($arr);$i++){
			echo $arr[$i].' ';
		}
		
	}
	sap_xep_tang_dan([1,3,6,9,4]);
			// echo $arr[$i];

?>