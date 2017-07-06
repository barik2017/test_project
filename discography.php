<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$discography = array(
  array('id' => '12','year' => '1994','band' => 'Pink Floyd','genre' => 'rock','name' => 'Division Bell','count_songs' => '10'),
  array('id' => '13','year' => '1989','band' => 'Nirvana','genre' => 'grunge','name' => 'Bleach','count_songs' => '11'),
  array('id' => '14','year' => '1991','band' => 'Nirvana','genre' => 'grunge','name' => 'Nevermind','count_songs' => '13'),
  array('id' => '15','year' => '1993','band' => 'Nirvana','genre' => 'grunge','name' => 'In Utero','count_songs' => '12'),
  array('id' => '16','year' => '1991','band' => 'Pearl Jam','genre' => 'grunge','name' => 'Ten','count_songs' => '12'),
  array('id' => '17','year' => '1993','band' => 'Pearl Jam','genre' => 'grunge','name' => 'Vs.','count_songs' => '10'),
  array('id' => '18','year' => '1994','band' => 'Pearl Jam','genre' => 'grunge','name' => 'Vitalogy','count_songs' => '12'),
  array('id' => '19','year' => '1996','band' => 'Pearl Jam','genre' => 'grunge','name' => 'No Code','count_songs' => '9'),
  array('id' => '20','year' => '1993','band' => 'Radiohead','genre' => 'rock','name' => 'Pablo Honey','count_songs' => '12'),
  array('id' => '21','year' => '1995','band' => 'Radiohead','genre' => 'rock','name' => 'The Bends','count_songs' => '12'),
  array('id' => '22','year' => '1997','band' => 'Radiohead','genre' => 'rock','name' => 'OK Computer','count_songs' => '1997'),
  array('id' => '23','year' => '2000','band' => 'Radiohead','genre' => 'rock','name' => 'Kid A ','count_songs' => '14'),
  array('id' => '24','year' => '1994','band' => 'Portishead','genre' => 'trip-hop','name' => 'Dummy','count_songs' => '8'),
  array('id' => '25','year' => '1997','band' => 'Portishead','genre' => 'trip-hop','name' => 'Portishead','count_songs' => '9'),
  array('id' => '26','year' => '1991','band' => 'Massive Attack','genre' => 'trip-hop','name' => 'Blue Lines','count_songs' => '12'),
  array('id' => '27','year' => '1994','band' => 'Massive Attack','genre' => 'trip-hop','name' => 'Protection','count_songs' => '15'),
  array('id' => '28','year' => '1998','band' => 'Massive Attack','genre' => 'trip-hop','name' => 'Mezzanine','count_songs' => '9'),
  array('id' => '29','year' => '1995','band' => 'Tricky','genre' => 'trip-hop','name' => 'Maxinquaye','count_songs' => '11'),
  array('id' => '30','year' => '1998','band' => 'Tricky','genre' => 'trip-hop','name' => 'Angels with Dirty Faces','count_songs' => '10'),
  array('id' => '31','year' => '1993','band' => 'The Roots','genre' => 'hip-hop','name' => 'Organix!','count_songs' => '11'),
  array('id' => '32','year' => '1995','band' => 'The Roots','genre' => 'hip-hop','name' => 'From the Ground Up','count_songs' => '13'),
  array('id' => '33','year' => '1996','band' => 'The Roots','genre' => 'hip-hop','name' => 'Illadelph Halflife','count_songs' => '15'),
  array('id' => '34','year' => '1999','band' => 'The Roots','genre' => 'hip-hop','name' => 'Things Fall Apart','count_songs' => '14'),
  array('id' => '35','year' => '1999','band' => 'The Roots','genre' => 'hip-hop','name' => 'The Legendary','count_songs' => '7'),
  array('id' => '36','year' => '1994','band' => 'Oasis','genre' => 'rock','name' => 'Definitely Maybe','count_songs' => '12'),
  array('id' => '37','year' => '1995','band' => 'Oasis','genre' => 'rock','name' => '(What\'s the Story) Morning Glory?','count_songs' => '11'),
  array('id' => '38','year' => '1997','band' => 'Oasis','genre' => 'rock','name' => 'Be Here Now','count_songs' => '10'),
  array('id' => '39','year' => '2000','band' => 'Oasis','genre' => 'rock','name' => 'Standing on the Shoulder of Giants','count_songs' => '13')
);
// жанры
echo "1. посчитать кол-во жанров: ";
$genre = array();
foreach($discography as $album) {
    if (!in_array($album["genre"], $genre)) {
        $genre[] = $album["genre"];
    }
}
echo count($genre);

// 2) Необходимо посчитать кол-во исполнителей

echo " <br> <br> 2. посчитать кол-во исполнителей: ";
$singer = array();
foreach($discography as $cd) {
    if (!in_array($cd["band"], $singer)) {
        $singer[] = $cd["band"];
    }
}
echo count($singer);

//3) Необходимо удалить все альбомы, датированные 2000-ым годом
echo "<br><br> 3. Удалить все альбомы, датированные 2000-ым годом ";

$discography2 = $discography;
foreach ($discography2 as $key => $value) {
    if(isset($discography2[$key]) && $value["year"] == '2000') {
        unset($discography2[$key]);
    }
}
var_dump($discography2);

// 4) Необходимо посчитать кол-во исполнителей

echo " <br> <br> 4. Необходимо посчитать количество всех альбомов в жанре trip-hop: ";

$discography3 = $discography;

foreach ($discography3 as $k => $v) {
    if (isset($discography3[$k]) && $v["genre"] !== 'trip-hop') {
        unset($discography3[$k]);
    }
}

echo count($discography3);


echo " <br> <br> 5. Необходимо посчитать количество всех исполнителей, которые выпускали альбомы в 1994 году:  ";

$discography4 = $discography;

foreach ($discography4 as $_1994 => $val) {
    if (isset($discography4[$_1994]) && $val["year"] !== '1994') {
        unset($discography4[$_1994]);
    }
}
echo count($discography4);

echo " <br> <br> 6) Необходимо определить альбом с наибольшим и наименьшим количеством композиций и вывести эти две цифры
  ";


$min = ["count_songs" => $discography[0]["count_songs"]
];
foreach ($discography as $album) {
    if ($album["count_songs"] < $min["count_songs"]) {
        $min = ["count_songs" => $album["count_songs"]
        ];
    }
}
var_dump($min);
$max=0;
foreach($discography as $val){
    if($max < $val['count_songs']) {
        $max = $val['count_songs'];
    }
}
var_dump($max);
