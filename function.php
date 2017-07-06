<meta charset="utf-8">

<?php

function LastNumber($count)
//исправить 10-20
{

    echo "$count ";
    $count = strval($count);
    $last = $count{strlen($count) - 1};
    if ($last == 1)
        return 'товар';
    if ($last == 2 || $last == 3 || $last == 4)
        return 'товара';
    if ($last == 5 || $last == 6 || $last == 7 || $last == 8 || $last == 9 || $last == 0)
return 'товаров';
}

for ($count=1; $count<11; $count++) {
    // echo $x;

    echo lastNumber($count);
    echo "<br>";
}
function perevernut($value){
$conversely = '';
$cont = mb_strlen($value);
for ($i = 1; $i <= $cont; $i++) {
    $conversely .= mb_substr($value, -$i, 1);
}

echo $conversely;
}
echo "<br>";
echo perevernut('А роза упала на лапу Азора');
echo "<br>";

$input = array(
    "a" => "green",
    "red",
    "b" => "green",
    "blue",
    "red"
);
//print_r($input);

function del_el_mas($val){
    $arr = array();
    foreach ($val as $key => $value){
        if (!in_array($value, $arr)) {
            $arr[$key] = $value;
    }
    }
        return ($arr);
}

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
var_dump(del_el_mas($input));







function array_dif($array1, $array2)
{
    foreach ($array1 as $key1 => $value1)
    {
        if (in_array($value1, $array2))
        {
            unset($array1[$key1]);
        }
    }
    return $array1;
}


$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_dif($array1, $array2);
var_dump($result);

$arrNumChuk= ['один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'];

echo "<br>массив: ";
foreach ($arrNumChuk as $val) {
    echo $val . " ";
}
echo "<br>";
function myArrChun( $arr, $parts ){
    $arrLeng = count($arr);
    $arrChun = [];
    $tmp = 0;

    for ($i = 0; $i < $arrLeng; $i++) {
        if(isset( $arr[$i]) ){
            for ($j = 0; $j < $parts; $j++) {
                if(isset( $arr[$tmp]) ){
                    $arrChun[$i][] = $arr[$tmp];
                    $tmp++;
                }
            }
        }
    }

    echo "Разбитый на $parts частей: <br>";
    foreach ($arrChun as $key) {
        foreach ($key as $v => $k) {
            echo $v . " " . $k . " ";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<pre>";
    var_dump($arrChun);
    echo "</pre>";
}

myArrChun($arrNumChuk, 2);



function My_FIO($f, $i, $o)
{
    if(!isset($f) || !isset($i) || !isset($o))
        return false;
    // Присваиваем фамилию
    $result = $f.' ';
    // добавляем первый символ имени
    $result .= mb_substr($i, 0, 1) . '.';
    // добавляем первый символ отчества
    $result .= mb_substr($o, 0, 1) . '.';
    return $result;
}
$f='Барабаш';
$i='Андрей';
$o='Александрович';
echo My_FIO($f,$i,$o);

function what_is_number($num) //+38(099)835-46-01
{

    $val = preg_replace('/[^0-9]/', '', $num);

   // echo $val;
    //echo "<br>";
    $count = mb_strlen($val);
    //echo $count;
    echo" <br>";
  $val =  mb_substr($val, 2, 3);
echo $val;
//$count = count($val);
if($val == '095' && $count === 12 || $val == '050' && $count === 12 || $val == '066' && $count === 12 ) {
    echo " У Вас МТС";
}
    elseif ($val == '097' && $count === 12 || $val == '067' && $count === 12 || $val == '096' && $count === 12) {
        echo " У Вас Киевстар";
    }
    elseif ($val == '093' && $count === 12 || $val == '073' && $count === 12 || $val == '063' && $count === 12 ){
        echo " У Вас Лайф";}
    else
        echo "Ошибка! Проверте правильность ввода номера! <br> Введиде номер в виде: +38(0XX)123-45-67<br> Где (0XX) - Код поератора";
}

$a = '+38(067)835 -46- 01';

echo what_is_number($a);