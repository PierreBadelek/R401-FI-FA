<?php
ini_set('display_errors', 1);

$id = $_POST["inecv"];
$target_file = $_SERVER['DOCUMENT_ROOT']."/CVs/".$id.".pdf";
$FileType = substr(basename($_FILES["cvupload"]["name"]), -4);

if ($FileType == ".pdf"){
    if ($_FILES["cvupload"]["size"] < 32000000) {
        move_uploaded_file($_FILES["cvupload"]["tmp_name"], $target_file);
    }
}
?>
