<?php
	$arr=[1,4,2,6,9,100,45,8,20];
	$max=$arr[0];
	for($i=0;$i<count($arr);$i++)
	{
		if($arr[$max]<$arr[$i]){
			$max = $i;
		}
	}
	echo 'Phần tử lớn nhất trong mảng là: '.$arr[$max].'<br>';
// function timMax($arr){
// 	$max = 0;
// 	for($i=0;$i<count($arr);$i++)
// 	{
// 		if($arr[$max]<$arr[$i]){
// 			$max = $i;
// 		}
// 	}
// 	return $arr[$max];
// }
// echo 'phần tử lớn nhất trong mảng là: '.timMax([1,2,3,4,100]);
?>