<?php
session_start();
?>

<?php include 'utils.php' ?>
<?php

$outFileName = $_SESSION['OutFileName'];
$q = $_REQUEST['q'];


if($q != "" && $q == "write_data"){
    $outFile = fopen($outFileName,'a');
    $data = json_decode(file_get_contents("php://input"));
    $line = $data->annotaions ."\t".  $data->caption;

    fwrite($outFile,$line);
    fclose($outFile);
}
?>