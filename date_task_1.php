<?php
$a = strtotime("01 Jan 2018");
//echo $a;
echo "<br>";
$b = time();
//echo $b;
echo "<br>";
$time_for_NY = intval( ($a - $b) /60 );
echo "До нового года осталось: $time_for_NY минут";
echo "<br>";
$a = strtotime("01 Sept ");
//echo $a;
echo "<br>";
$b = time();
//echo $b;
echo "<br>";
$time_for_NY = intval( ($a - $b)  );
echo "До конца лета осталось: $time_for_NY секунд";


$a = strtotime("next Monday");
//echo $a;
echo "<br>";
$b = time();
//echo $b;
echo "<br>";
$time_for_NY = intval( ($a - $b) /3600);
echo "До следующего понедельника осталось: $time_for_NY часов";

$a = strtotime("25 Feb 2010");
$b = strtotime("22 Feb 2014");
$V_F_Jan = $b-$a;
echo "<br> Виктор Федорович Янукович, пробыл президентом $V_F_Jan секунд";

?>