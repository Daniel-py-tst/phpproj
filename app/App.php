<?php

declare(strict_types = 1);

$dir = dirname(__DIR__) . DIRECTORY_SEPARATOR . "transaction_files";


function returnDirFiles(string $directory): array{
    $files = scandir($directory);
    array_splice($files, 0, 2);
    return $files;
}


print_r(returnDirFiles($dir));

#hello

