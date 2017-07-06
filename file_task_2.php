<?php
function downloadImage($url)
{$name = basename($url);

    $file = file_get_contents($url);
    //var_dump($file);
    file_put_contents($name, $file);
}

$url = 'https://static.pexels.com/photos/110241/pexels-photo-110241.jpeg';
downloadImage($url);
?>