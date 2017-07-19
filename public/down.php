<?php

$rootPath = realpath('../storage/app/');

// Initialize archive object
$zip = new ZipArchive();
$zip->open('file.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object

$yourfile = '../storage/dev.sqlite';
$zip->addFile($yourfile, 'dev.sqlite');
$zip->close();

$yourfile ='file.zip';
$fp = @fopen($yourfile, 'rb');

    if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))
{
    header('Content-Type: "application/octet-stream"');
    header('Content-Disposition: attachment; filename="dev.zip"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header("Content-Transfer-Encoding: binary");
    header('Pragma: public');
    header("Content-Length: ".filesize($yourfile));
}
else
{
    header('Content-Type: "application/octet-stream"');
    header('Content-Disposition: attachment; filename="dev.zip"');
    header("Content-Transfer-Encoding: binary");
    header('Expires: 0');
    header('Pragma: no-cache');
    header("Content-Length: ".filesize($yourfile));
}

fpassthru($fp);
fclose($fp);