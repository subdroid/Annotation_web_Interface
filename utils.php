<?php

function getImagesList($imagePath){
    $files = scandir($imagePath);
    $files = array_diff($files, array('.', '..'));
    $filenames = array_values($files);
    for($i=0; $i < sizeof($files); $i++){
        $filenames[$i] = explode('.',  $filenames[$i])[0];
    }
    sort($filenames);
    return $filenames;
}

function getImageCaptions($captionsPath){
    $captions = [];
    $captionFile = fopen($captionsPath, 'r') or die('Unable to open captions file');
    
    while(!feof($captionFile)){
        $line = fgets($captionFile);
        array_push($captions,$line);
    }
    $captions = array_diff($captions,array(''));
    $allCaptions = array_values($captions);

    return $allCaptions;
}



?>