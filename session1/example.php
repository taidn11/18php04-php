<?php 
	$userName = "php04";
	echo $userName;
	//+ - * / % = == !=
	// function myFunction(){
	// 	echo "<br>";
	// 	$a = 6;
	// 	$b = 5;
	// 	$c = $a + $b;
	// 	return $c;
	// }
	// echo myFunction();
	function mySum($a , $b){
	return $a + $b;
	}
	echo "<br>";
	echo mySum(6 , 5);
	$d = mySum(10 , 5);
	echo "<br>";
	if ($d % 2 == 0){
		echo "số chẳn";
	}else if ($d % 3 == 0){
		echo "số lẻ";
	}else{
		echo "không chia hết cho 3";
	}
	echo "<br>";
	$n = 12;
	switch ($n) {
		case '1':
		case '3':
		case '5':
		case '7':
		case '8':
		case '10':
		case '12':
			echo "tháng có 31 ngày";
			break; 
		case '2':
			echo "tháng có 29 ngày";
			break;
		case '4':
		case '6':
		case '9':
		case '11':
			echo "tháng có 30 ngày";
			break;
		default:
			echo "số bạn cho trước không phải là tháng";
			break;
	}
	
?>
