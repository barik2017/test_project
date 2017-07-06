<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function scan($directory, $textfile)
{

    $result = scandir($directory);
    $fp = fopen($textfile, 'w');

    foreach ($result as $file)
    {
        $info = new SplFileInfo($file);

        fwrite($fp, $info->getFilename() . '|');

        if ($info->isDir()) {
            fwrite($fp, 'dir' . '|');
        } else {
            fwrite($fp, 'file' . '|');
        }

        fwrite($fp, $info->getExtension() . '|');
        fwrite($fp, $info->getSize() . "\n");
    }



    fclose($fp);
}




$a = '/var/www/test_project';
$b = '/var/www/test_project/file.txt';

echo scan($a, $b);




