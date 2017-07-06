<?php
function count_html($site = '')
{
    $site_content = file_get_contents($site);
    $count = mb_strlen ($site_content);
    //echo $count;
        $count_html = substr_count($site_content, "</h1>");
    echo "Тегов h1 : $count_html штук";
        $a = explode('<title>', $site_content);
        unset($a[0]);
            $str = implode(' ',$a);
                $b = explode('</title>', $str);
                unset($b[1]);
                    $str = implode(' ',$b);
                        echo " <br> На сайте ($site) в title было заключено: $str";
    //echo "<br> $count";
    $a = strip_tags($site_content);
    $count1 = mb_strlen ($a);
    //echo "<br> $count1";
    $count = $count - $count1;
    echo "<br> количество html тегов: $count";
}



$site='http://mindteam.com.ua';
count_html($site);

//$a = explode('<title>', $site_html_content);
//var_dump($a);