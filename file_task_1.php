<?php

function del_in_dir($my_folder){
    $dir = basename($my_folder);
    $result = scandir($dir);
    var_dump($result);
    foreach ($result as $k => $v) {
        //  $count = count ($k);
        $q = array();

        //if ($k != ['null']){
        //  exit;}
        if ($v = '.' || $v = '..') {
            continue;
        }


        if (is_file($v)) {
            // $v=$v->getPath();
            //echo $v;
            unlink($v);
            //echo $v;

            // } elseif (is_dir($v)) {
            //      return del_in_dir($dir);
        } //    rmdir($v);

        else
            rmdir($v);

    }


}

function del_file($my_folder, $del, $new_folder = null)
{
    if ($del == 'delete') {
        del_in_dir($my_folder);
        if ($del == 'move') {
            $name = basename($my_folder);
            if (!copy($name, $new_folder)) {
                echo "не удалось скопировать $name...\n";
            } else {
                unlink($name);
            }

        }
    }
}
$a = '/var/www/test_project/new_directory/file.txt';
$b = '/var/www/test_project/directory';
$del = 'delete';
$de = 'move';
del_file ($b,$del);