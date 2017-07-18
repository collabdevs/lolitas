<?php


$yourfile = '../storage/dev.sqlite';
$fp = @fopen($yourfile, 'rb');

    if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))
{
    header('Content-Type: "application/octet-stream"');
    header('Content-Disposition: attachment; filename="dev.sqlite"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header("Content-Transfer-Encoding: binary");
    header('Pragma: public');
    header("Content-Length: ".filesize($yourfile));
}
else
{
    header('Content-Type: "application/octet-stream"');
    header('Content-Disposition: attachment; filename="dev.sqlite"');
    header("Content-Transfer-Encoding: binary");
    header('Expires: 0');
    header('Pragma: no-cache');
    header("Content-Length: ".filesize($yourfile));
}

fpassthru($fp);
fclose($fp);