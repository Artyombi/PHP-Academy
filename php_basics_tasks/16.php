<?php
//Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.
$a = -5;
$b = -3;
if (is_int($a) && is_int($b)) {
	if ($a > $b) {
		echo $a;
	} elseif ($a == $b) {
		echo 'Числа равны';
	} else {
		echo $b;
	}
} else {
	echo 'Ошибка! Возможно, одно из значений не является числом.';
}

?>