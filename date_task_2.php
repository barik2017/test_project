<?php
function Count_monday_21_jun($year)
{
    $a = 0;
    $year = $year + 1;
    for ($k = 1; $k <= 11; $k++) {
        $year = $year - 1;
        $b = strtotime("01 Jun $year ");
        $f = date('D', $b);

        if ($f === 'Sun') {

            $a = $a + 1;
        }


    }
    echo $a;
}

Count_monday_21_jun(2009);

function My_HB($day,$mou,$year)
{
    $b = strtotime("$day $mou $year ");
    $f = date('l', $b);
echo "<br>";
    echo $f;
}
My_HB(12,12,1994);

function cout_vis_god($year)
{
    $b = strtotime("$year");
    $f = date('Y', $b);
    $a = date('Y');
    $c = 0;
    for ($k = $f; $k <= $a ; $k++)
    {

        $v = strtotime ("01 Jan $k");
        $re =date('L', $v);
        if ($re == 1){
            $c=$c+1;
        }
    }
        echo "<br>";
echo $c;
echo "<br>";
}
cout_vis_god(1994);

function Difference_in_time($hour, $minute){

        $w = mktime($hour, $minute);
        $w = date('H', $w);

        date_default_timezone_set('America/New_York');
        $w1 = date('H');

          echo $w1;



        $count1 = $w - $w1;
        $arr['Time_in_NY'] = $count1;

        $c = date_default_timezone_set('Asia/Tokyo');
        $w1 = date('H', $c);
        $count1 = $w - $w1;
        $arr['Time_in_Tokyo'] = $count1;


var_dump($arr);
}

Difference_in_time(20,55);


function count_friday_13th($year)
{
    $p = 0;
    $b = strtotime("01 Jan $year ");
    for ($i = 0; $i <= 365; $i++) {
        $n = date('j D', $b);
echo "<br>$n";
        if ($n != '13 Fri') {
            $b = strtotime("+$i day");

        }

        else
            {
                $b = strtotime("+$i day");
            $p = $p + 1;

        }

    }

        echo "<br>$p";


}
count_friday_13th(2017);

?>

