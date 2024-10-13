<?php

declare(strict_types = 1);

$dir = dirname(__DIR__) . DIRECTORY_SEPARATOR;
$fileDirectory = $dir . "transaction_files" . DIRECTORY_SEPARATOR;


function returnDirFiles(string $directory): array{
    $files = scandir($directory);
    array_splice($files, 0, 2);
    return $files;
}

function parseFiles(array $files, string $directory){
    #runs through each file in the specified directory assuming it is a csv file
    foreach($files as $file){
        #check if the file is not empty
        $readableFile = (bool) filesize($directory . $file);
        if(!$readableFile){
            echo $file . " is empty, continuing... <br/>";
            continue;
        }

        echo "opening " . $directory . $file . "... <br/>";
        $filePointer = fopen($directory . $file, "r");
        #headers of the csv file and array to return
        $headers = fgetcsv($filePointer);
        $returnArray = [];

        #loops through until eof and combines the headers with the corresponding data
        while(($line = fgetcsv($filePointer)) != false){
            $data = array_combine($headers, $line);
            $returnArray[] = $data;
        }
        fclose($filePointer);
        return $returnArray;
    }
}

$files = returnDirFiles($fileDirectory);
echo '<pre>';
print_r(parseFiles($files, $fileDirectory));
echo '</pre>';
