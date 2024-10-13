<?php

declare(strict_types = 1);

function returnDirFiles(string $directory): array{
    $files = scandir($directory);
    array_splice($files, 0, 2);
    return $files;
}

function returnDirFiles(string $directoryPath): array {
    $files = [];
    foreach(scandir($directoryPath) as $file){
        if(is_dir($file)){
            continue;
        }
        $files[] = $directoryPath . $file;
    }
    return $files;
}
$srkjnrkgjrgeggit
function parseFiles(array $files, string $folder){
    $returnArray = [];
    #runs through each file in the specified directory assuming it is a csv file
    foreach($files as $file){
        #check if the file is not empty
        $readableFile = (bool) filesize($folder . $file);
        if(!$readableFile){
            echo $file . " is empty, continuing... <br/>";
            continue;
        }

        echo "opening " . $folder . $file . "... <br/>";
        $filePointer = fopen($folder . $file, "r");
        #headers of the csv file and array to return
        $headers = fgetcsv($filePointer);
        $fileArray = [];

        #loops through until eof and combines the headers with the corresponding data
        while(($line = fgetcsv($filePointer)) != false){
            $data = array_combine($headers, $line);
            $fileArray[] = $data;
        }
        $returnArray[] = $fileArray;
        fclose($filePointer);
    }
    return $returnArray;
}

function isPositive(string $value): bool{
    return !(str_contains($value, "-"));
}


function dollarToInt(string $dollars, int $levels): float{
    $noCommas = $dollars;
    if(strpos($dollars, ",")){
        $noCommas = str_replace(',', '', $dollars);
    }
    return  (float) substr($noCommas, $levels);
}

function formatDollarAmount($amount) {
    // Handle negative formatting
    if ($amount < 0) {
        return '-$' . number_format(abs($amount), 2);
    }
    return '$' . number_format($amount, 2);
}





