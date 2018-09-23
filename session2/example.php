<?php
	//khai báo một mảng
	$arr = [];
	$arr = ['Nhu Y', 'Suong', 'Tai', 'Minh', 'Kiet'];
	$arr1 = [0 => 'Nhu Y', 1 => 'Suong', 2 => 'Tai', 3 => 'Minh', 4 => 'Kiet'];
	$arr2 = ['nhuy' => 'Nhu Y', 'suong' => 'Suong', 'tai' => 'Tai', 'minh' => 'Minh', 'kiet' => 'Kiet'];

	// var_dump($arr);
	// var_dump($arr1);
	// var_dump($arr2);
	foreach ($arr as $key => $value) {
		echo $key.', ' .$value;
		echo "<br>";
	}
	echo "//////////<br>";
	foreach ($arr1 as $key => $value) {
		echo $key. ', ' .$value;
		echo "<br>";
	}
	echo "//////////<br>";
	foreach ($arr2 as $key => $value) {
		echo $key. ', ' .$value;
		echo "<br>";
	}
	//thêm phần tử
	array_push($arr, 'Tuan');
	var_dump($arr);
	echo "<br>";
	//loại thằng cuối cùng
	array_pop($arr1);
	var_dump($arr1);
	echo "<br>";
	//bỏ phần tử 
	unset($arr2['suong']);
	var_dump($arr2);
	echo "<br>";
	//nối 2 mảng 
	$arr3 = array_merge($arr1, $arr2);
	var_dump($arr3);
	echo "<br>";
	foreach ($arr3 as $key => $value) {
		echo $key. ', ' .$value;
		echo "<br>";
	}
	echo "/////////////////<br> my class <br>";
	$myClass = array();
	array_push($myClass , 'Tuan');
	array_push($myClass , 'Tai');
	var_dump($myClass);
	echo "<br>";
	$arrMyClass = array(
		'nhuy' => array(
			'name' => 'Nhu Y',
			'age' => 20,
			'gender' => 'female',
			'phone' => '09888...'
		),
		'tuan' => array(
			'name' => 'Tuan',
			'age' => 21,
			'gender' => 'male',
			'phone' => '0905...'
		),
		'tai' => array(
			'name' => 'Tai',
			'age' => 23,
			'gender' => 'male',
			'phone' => '0905...'
		),
	);
	// var_dump($arrMyClass);
	// 1. Nhu Y - 20 tuoi - Nu - 0988...
	// 2. Tuan - 21 tuoi - Nam - 0934...
	// 3. Tai - 23 tuoi - Nam - 0905...
	// Them ban Vuong, 25 tuoi, Nam, 0978... vao danh sach lop
	// Doi so dien thoai cua ban Nhu Y la 0168...
	// Xoa ban Tai khoi danh sach lop
	echo "//////////////////<br>";
	function changeGenderVi($gender){
		return $gender == 'male'?"Nam":"Nu";
	}
	function listClass($arrMyClass) {
		$i = 1;
		foreach ($arrMyClass as $key => $value) {
			echo $i.' - '.$value['name'].' - '.$value['age'].' tuoi'.' - '.changeGenderVi($value['gender']).' - '.$value['phone'];
			echo "<br>";
			$i++;
		}
	}
	listClass($arrMyClass);
	//thêm bạn mới vào danh sách
	$newFriend = array(
		'vuong' => array(
			'name' => 'Vuong',
			'age' => 25,
			'gender' => 'Nam',
			'phone' => '0978...'
		)
	);
	$newClass = array_merge( $arrMyClass, $newFriend);
	echo "//////////////////<br>";
	listClass($newClass);
	//đổi số điện thoại
	$newClass['nhuy']['phone'] = '0168...';
	echo "//////////////////<br>";
	listClass($newClass);
	//xóa bạn tai
	unset($newClass['tai']);
	echo "//////////////////<br>";
	listClass($newClass);
?>