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




