<?php

include "FileSystemObject.php";

$dir = new DirectoryIterator('.');
foreach ($dir as $file) {
    if ($file->isFile()) {
        $fileObj = new FileSystemObject($file->getPathname());
        echo "name: " . $fileObj->getName() . "\n";
        echo "size: " . $fileObj->getSize("MB") . "MB\n";
        echo "type: " . $fileObj->getType() . "\n\n";
    }
}