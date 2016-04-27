<?php 
//Задание 1. Написать функцию которая формирует пирамиду(ромб) по переданному символу и "длинной" или "высотой" что указываешь, параметр 3й ($full) при значении true добавляет нижную часть но наоборот. Таким способом у вас будет ромб. 4й параметр($reversed) в true наклоняет его в бок (выравнивание справа).
function angle($symbol = '*', $length = 10, $full = false, $reversed = true) {
	if ($reversed == false) {
		$style = " style='display:block; text-align:center'";
		}
	echo "<div$style>";
	$style = "";
	$arr1 = [];
	for ($i=1; $i <= $length; $i++) {
		for ($j=1; $j <= $i; $j++) { 
		 	$arr1[$i][$j] = $symbol;
		 } 
		echo "<div$style>" . implode("", $arr1[$i]) . "</div>";
		echo '<br>';
	}
	if ($full == true) {
		for ($j = ($length-1); $j >= 1; $j--) { 
				echo "<div$style>" . implode("", $arr1[$j]) . "</div>";
				echo '<br>';
		}
	}
echo '</div>';
};
angle('*', 5, true, false);

?>