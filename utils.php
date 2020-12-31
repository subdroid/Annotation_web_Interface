<?php

/*
 * getImagesList() returns a sorted of all the filename from the 
 * specified directory. It removes the extension of the file from 
 * the filename.
 */
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

/* 
 * getImageCaptions() function opens the captions file and read the file
 * line-by-line. This function returns an array of all the captions.
 */
function getImageCaptions($captionsPath){
    $captions = [];
    $captionFile = fopen($captionsPath, 'r') or die('Unable to open captions file');
    
    while(!feof($captionFile)){
        $line = fgets($captionFile);
        array_push($captions,$line);
    }
    // It removes the empty string from at the end of the array
    $captions = array_diff($captions,array(''));
    $allCaptions = array_values($captions);

    return $allCaptions;
}
/*
 * getIndex() function returns index of next image and captions.
 * It restores the state of application incase of accidental refresh.
 */
function getIndex(){
    $index = 0;
    if(isset($_SESSION['index'])){
        $index = $_SESSION['index'];
    }
    return $index;
}

?>