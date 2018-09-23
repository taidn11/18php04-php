<?php
	$arrmyPhone = array(
		'IphoneX' => array(
			'name' => 'Iphone X',
			'price' => 30000000,
			'image' => 'iphonex.jpg',
			'description' => 'Iphone X'
		),
		'J7prime' => array(
			'name' => 'J7 Prime',
			'price' => 600000,
			'image' => 'j7prime.jpg',
			'description' => 'Sản phẩm của sam sung'
		),
	);
	function showImage($image){
		return "<img src = '$image' alt= '' >";
	}
	function priceDiscount($price, $discount){
	return $price * (100 - $discount);
	}
	function listPhone($arrmyPhone){
		$i = 1;
		foreach ($arrmyPhone as $key => $value) {
			if(isset($value['discount'])){
				echo $i.' - '. $value['name'].' - '. $value['price'].' - '. showImage($value['image']).' - '. $value['description'].' - '.priceDiscount($value['price'], $value['discount'])."<br>";
			}else{
				echo $i.' - '. $value['name'].' - '. $value['price'].' - '. showImage($value['image']).' - '. $value['description']."<br>";
			}
			$i++;
		}
	}

	listPhone($arrmyPhone);
	//thêm giảm giá 
	$arrmyPhone['IphoneX']['discount'] = 10;
	$arrmyPhone['J7prime']['discount'] = 15;
	echo "<br>-------------<br>";
	listPhone($arrmyPhone);
	//đổi ảnh
	$arrmyPhone['IphoneX']['image'] = 'iphonexplus.jpg';
	echo "<br>-------------<br>";
	listPhone($arrmyPhone);
	//thêm sản phẩm xiaomi
	$xiaomi = array(
		'Xiaomi' => array(
			'name' => 'Xiaomi',
			'price' => 5000000,
			'image' => 'xiaomi.jpg',
			'description' => 'Xiaomi'
		)
	);
	$newPhone = array_merge( $arrmyPhone , $xiaomi);
	echo "<br>-------------<br>";
	listPhone($newPhone);
	//xóa sản phẩm J7
	unset($newPhone['J7prime']);
	echo "<br>-------------<br>";
	listPhone($newPhone);
?>
