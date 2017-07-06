<meta charset="utf-8">
<?php

$str = "<p> в том же 1990 году стартовал первый телесериал Линча — Твин Пикс. В основе сюжета сериала — расследование загадочного убийства школьницы Лоры Палмер, произошедшего в небольшом американском городке Твин Пикс. Сериал пользовался поначалу большим успехом, но уже через год съёмки были свёрнуты из-за низких рейтингов. Тем не менее сериал стал знаковым культурным явлением начала 1990-х. Ежегодно под Сиэтлом проходит слёт поклонников Твин Пикса </p>";

echo "1. количество повторений в строке выражения Твин Пикс: ";

echo substr_count("$str", "Твин Пикс");
echo "<br> <br>2. заменить в строке Твин Пикс на Twin Peaks: <br> <br> ";
$new_str = str_replace("Твин Пикс", "Twin Peaks", $str);
echo "$new_str";
echo " <br>3. посчитать количество символов в строке: ";
echo mb_strlen($str);
echo "<br> <br>4. посчитать количество символов без пробелов в строке: ";

$str_no_probel = str_replace(' ', '', $str);
echo mb_strlen($str_no_probel);
echo "<br> <br> 5. убрать html-теги &lt;p&gt в строке: <br>";
echo strip_tags($str);
echo "<br> <br> 6. вывести строку в браузере как html-код";
$no_html_str =  html_entity_decode($str);
echo $no_html_str;


$first = mb_substr($str,0,5);
$last = mb_substr($str,5);//все кроме первой буквы
$first = mb_strtoupper($first);

$first_letter = $first.$last;
echo $first_letter;
?>

