<?php
header("Access-Control-Allow-Origin: *");
echo $_POST['game'];die();
$name = md5($_SERVER['REMOTE_ADDR'].time());
$file = '../game/'.$name.'.json';

if (file_put_contents($file, $_POST['game'], FILE_APPEND)) echo $name;