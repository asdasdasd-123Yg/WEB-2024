<?php

echo "\n";
echo "Num 1";

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings ";


// Write your code here:
$oder =& $very_bad_unclear_name;
$oder .= "so tasty !";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";
echo "\nNum 2\n";


$minutes = 23;
echo $minutes;

$tochka = 5.5;
echo "\n";

echo $tochka;
echo "\n";

echo $minutes - $tochka - $tochka;
echo "\n";


$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
echo "\nNum 11\n";

$num_languages = 4;

$month = 11;

$days = $month * 16;

$days_per_language = $days / $num_languages;
echo $days_per_language;

echo "\nNum 12\n";
echo 8**2;

echo "\nNum 13\n";
$my_num = 100;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

echo "\nNum 14\n";
$a = 10;
$b = 3;
echo $a % $b;
echo "\n";
echo "Делится ли $a на $b без остатка? ";
if ($a % $b == 0) {
    echo "Делится, " . $a / $b;
} else {
    echo "Делится с остатком, остаток от деления $a на $b будет равен " . $a % $b;
}
echo "\n";


$at = pow(2,10);
echo "2 в степени 10 равно: " .$at;
echo "\n";
echo "корень из числа 245 равен: " .sqrt(245);
echo "\n";

$summa = 0;
$numbers = array(4, 2, 5, 19, 13, 0, 10);
foreach ($numbers as $value) {
    $summa += pow($value, 2);
}
echo "корень из суммы квадратов чисел 4, 2, 5, 19, 13, 0, 10 равен: " .sqrt($summa);
echo "\n";

$s = round(sqrt(379));
$ss = round(sqrt(379), 1);
$sss = round(sqrt(379), 2);
$ans = array($s, $ss, $sss);
echo "квадратный корень из 379, округленный до целых, десятых, сотых равен соответственно: ";
echo "\n";
echo $s;
echo "\n";
echo $ss;
echo "\n";
echo $sss;
echo "\n";
$wp = array("round" => round(sqrt(587)), "ceil" => ceil(sqrt(587)));
echo "квадртаный корень из 587, округленный в большую сторону равен: " .$wp["round"];
echo "\n";
echo "квадртаный корень из 587, округленный в меньшую сторону равен: " .$wp["ceil"];
echo "\n";


$minn = min(4, -2, 5, 19, -130, 0, 10);
$maxx = max(4, -2, 5, 19, -130, 0, 10);
echo "минимальное число среди чисел 4, -2, 5, 19, -130, 0, 10 это: " .$minn;
echo "\n";
echo "максимальное число среди чисел 4, -2, 5, 19, -130, 0, 10 это: " .$maxx;
echo "\n";

echo "рандомное число: " .rand(1, 100);
echo "\n";
$rand = [];
for ($i = 0; $i < 11; $i++) {
    $rand = rand();
}
echo "массив из десяти рандомных чисел: " .$rand;
echo "\n";


for ($i = 1; $i <= 10; $i++) {
    $a = rand(1, 100);
    $b = rand(1, 100);
    echo abs($a - $b) . " - модуль разности случайных a = $a и b = $b, итерация $i";
    echo "\n";
}
$mass = [1,2,-1,-2,3,-3];
$new_mass = [];
echo "массив из положительных чисел: ";
for ($i = 0; $i < count($mass); $i++){
    $new_mass[$i] = abs($mass[$i]);
    echo $new_mass[$i];
}


echo "\n";
$r = rand();
$del = [];
for ($i = 1; $i <= ceil(sqrt($r)); $i++) {
    if ($r % $i == 0) {
        $del[] = $i;
        $del[] = $r / $i;
    }
}
echo "Делители числа $r - ";
foreach ($del as $value) {
    echo $value . ", ";
}
echo "\n";



$a_1 = array(1,2,3,4,5,6,7,8,9,10);
$indx = $a_1[0];
$i = 1;
while ($indx <= 10) {
    $indx += $a_1[$i];
    $i++;
}
echo $i .' - столько первых элементов массива a_1 нужно сложить, чтобы суммма была больше 10';
echo "\n";


function printStringReturnNumber(): int
{
    echo "Возврат числового значения";
    return 27;
}
$myNum = printStringReturnNumber();
echo "\n";
echo $myNum;




echo "\nNum16\n";
function  increaseEnthusiasm(string $string): string
{
    return $string ."! ";
}
echo increaseEnthusiasm("Привет");

function repeatThreeTimes(string $string): string
{
    $res = "";
    for ($i=0; $i <3; $i++){
        $res .= $string;

    }
    return $res;
}
echo "\n";
echo repeatThreeTimes("мир");
echo "\n";
echo repeatThreeTimes(increaseEnthusiasm("кто здесь ?"));

function cut(string $string, int $num=1): string
{
    if (strlen($string) <= $num) {
        return $string;
    } else {
        $cutString = '';
        for ($i = 0; $i < $num; $i++) {
            $cutString .= $string[$i];
        }
        return $cutString;
    }

}
echo cut("я лично нахожусь тут, а ты ?", 10);
echo "\n";

$randomlist = [];
for ($i = 0; $i < 10; $i++) {
    $randomlist[] = rand();
}
echo "Случайный массив:( ";
foreach ($randomlist as $value) {
    echo $value . " ";
}
echo ")";
echo "\n";
function printTheArray(array $array, int $len, int $i = 0): void
{
    if ($i == $len) {
        echo "\n";
        return;
    }
    echo $array[$i] . " ";
    $i++;
    printTheArray($array, $len, $i);
}
printTheArray($randomlist, count($randomlist));
function digitsCounter(int $num): int
{
    if ($num < 0) {
        $num = abs($num);
    }
    if ($num < 10) {
        return $num;
    }
    $stringNum = $num. '';
    $sum = intval($stringNum[0]);
    for ($i = 1; $i < strlen($stringNum); $i++) {
        $sum += intval($stringNum[$i]);
    }
    return digitsCounter($sum);
}
echo digitsCounter(1344);


echo "\nNum17\n";
function string_of_x(array &$array, int $number_of_x): void
{
    for ($i = 0; $i <= $number_of_x; $i++){
        $array[] = str_repeat('x', $i);
    }
}
$xx = [];
string_of_x($xx, 5);
foreach ($xx as $value){
    echo $value ." ";
}
echo "\n";

function str_x($value, int $count): array
{
    $array = [];
    for ($i=0; $i <$count; $i++){
        $array[] = $value;
    }
    return $array;
}
$xxx = str_x('x', 5);
foreach ($xxx as $sh){
    echo $sh;
}
echo "\n";
$_2DArray = array(
    array(1, 2, 3),
    array(4, 5),
    array(6)
);

function sumof2DArray(array $_2DArray): int
{
    $sum = 0;
    foreach ($_2DArray as $array) {
        foreach ($array as $item) {
            $sum += $item;
        }
    }
    return $sum;
}
echo sumof2DArray($_2DArray);
echo "\n";
$count = 1;
$arrayth = [];
for ($i = 0; $i < 3; $i++) {
    $arrayth[] = [];
    for ($j = &$count; $j < 10; $j++) {
        $arrayth[$i][] = $j;
    }
}
foreach ($arrayth as $array) {
    foreach ($array as $sh) {
        echo $sh . ',';

    }
}
echo "\n";

$wp = array(2,5,3,9);
$wp_12 = $wp[0] * $wp[1];
$wp_34 = $wp[2] * $wp[3];
$result = $wp_12 + $wp_34;
echo $result;
echo "\n";

$user = array("name" => "Andrew", "surname" => "Kruglyak", "patronymic" => "Olegovich");
echo $user["surname"] .' ' .$user["name"] .' ' .$user["patronymic"];
echo "\n";

$date = array("year"=> "2024", "month" =>"March", "day"=>"9");
echo $date["year"] ."-" .$date["month"] ."-" .$date["day"];
echo "\n";

$arr = array('a','b','c','d','e');
$counter = 0;
foreach ($arr as $sh){
    $counter++;
}
echo "Кол-во элементов в массиве: " .$counter;
echo "\n";
echo "Последний элемент в массиве: " .$arr[$counter-1];
echo "\n";
echo "Предпоследний элемент в массиве: " .$arr[$counter-2];
echo "\n";



echo "\nNum18\n";
function sravnenie(int|float $fisrt_num, int|float $second_num): bool
{
    if (($fisrt_num+$second_num) > 10){
        return true;
    }
    else {
        return false;
    }
}
$dwa_ch = sravnenie(2,4);
if ($dwa_ch){
    echo "true";
}
else{
    echo "false";
}
echo "\n";

function abs_s(int|float $first_num, int|float $second_num): bool
{
    if ($first_num == $second_num){
        return true;
    }
    else{
        return false;
    }
}
$ab = abs_s(2,2);
if ($ab){
    echo "true";
}
else{
    echo "false";
}
echo "\n";

$test = 0;
echo (($test == 0) ? "верно" : '');
echo "\n";

$age = rand(1, 1000);
function suma(int $age): int
{
    if ($age<0){
        $age = abs($age);
    }
    $str_age = $age .'';
    $sum = intval($str_age[0]);
    for ($i=1; $i < strlen($str_age);$i++){
        $sum += intval($str_age[$i]);
    }
    return $sum;
}
function old(int $age): string|int
{
    if ($age<10|$age>99){
        echo "число меньше 10 или больше 99";
    }
    if ((10<=$age) and($age>=99)){
        suma($age);
    }
    return $age;
}
$sum_age = suma(old(20));
if ($sum_age<=9){
    echo "Сумма цифр однозначна";
}
else{
    echo "Сумма цифр двузначна";
}
echo "\n";

$arr = [];
$numm = rand(1, 5);

for ($i = 0; $i < $numm; $i++) {
    $arr[] = rand(1, 100);
}
foreach ($arr as $sh) {
    echo $sh . ' ';
}
echo "\n";

$i = 0;
$sum = 0;
foreach ($arr as $sh) {
    $i += 1;
    if ($i == 4) {
        break;
    }
    $sum += $sh;
}
if ($i == 3) {
    echo 'Условие успешно сработало: кол-во элементов в массиве 3, сумма равна ' . $sum;
}





echo "\nNum19\n";
$piram = "";
for ($i=1; $i<21;$i++){
    $piram .="x";
    echo $piram;
    echo "\n";
}





echo "\nNum20\n";
$arr = [];
$num = rand(1,5);
for ($i = 0; $i < $num; $i++){
    $arr[]=rand(1,100);
}
foreach ($arr as $sh){
    echo $sh .' ';
}
echo "\n";
$arithmetica = array_sum($arr) / count($arr);
echo $arithmetica;
echo "\n";

function sto(int $first_nym, int $last): int
{
    return (($first_nym+$last)/2)*$last;

}
echo "Сумма чисел от 1 до 100 " .sto(1,100);
echo "\n";

$arrr = [];
$num = rand(1,5);
for ($i = 0; $i < $num; $i++){
    $arrr[]=rand(1,100);
}
foreach ($arr as $sh) {
    echo $sh . ' ';
}
$sqrtArray = array_map('sqrt', $arr);
echo "- квадратные корни чисел соответственно будут равны: ";
foreach ($sqrtArray as $sh) {
    echo "\n";
    echo $sh . ' ';
}
echo "\n";

$alf = range("a", "z");
$val = range(1, 26);
$asd = array_combine($alf,$val);
foreach ($asd as $alf=> $val){
    echo "key: $alf; value: $val";
    echo "\n";
}


function Lfunc(string $num, $i = 0, $summ = 0): int
{
    $summ += intval(substr($num, 0, 2));
    if (strlen($num) == 0) {
        return $summ;
    } else {
        return Lfunc(substr($num, 2), 2, $summ);
    }
}
echo "сумма пар цифр 1 и 2,3 и 4,5 и 6,7 и 8,9 и 0 строки 1234567890 равна " .Lfunc('1234567890');