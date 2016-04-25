<!--Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления). На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.-->
<p><h1>Калькулятор</h1></p>
<form action="15.php" method="post">
	1-ое число: <input type="text" name="$a"/><br>
	2-ое число: <input type="text" name="$b"/><br>
	Математическое выражение: <select name="$operator" size=1>
														<option value=1 selected>+</option>
														<option value=2>-</option>
														<option value=3>/</option>
														<option value=4>*</option>
														<option value=5>%</option>
														</select><br>
	<input type="submit" value="Решить" />
</form>
<?php
/*print_r($_POST['$a']);
print_r($_POST['$b']);
print_r($_POST['$operator']);*/
$a = $_POST['$a'];
$b = $_POST['$b'];
$operator = $_POST['$operator'];
if ($a != NULL && $b != NULL) {
	switch ($operator) {
		case 1:
			echo $a. ' + '.$b.' = '.($a+$b);
			break;
		case 2:
			echo $a. ' - '.$b.' = '.($a-$b);
			break;
		case 3:
			if ($b == 0) {
				echo 'Ошибка! На 0 делить нельзя!';
			} else {
			echo $a. ' / '.$b.' = '.($a/$b);
		}
			break;
		case 4:
			echo $a. ' * '.$b.' = '.($a*$b);
			break;
		case 5:
			echo $a. ' % '.$b.' = '.($a%$b);
			break;
	}
} else {
	echo 'Выберите 2 числа';
}
?>