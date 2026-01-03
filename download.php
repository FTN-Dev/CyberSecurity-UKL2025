<?php
$f = $_GET['file'] ?? 'hasil_lab_01.pdf';
$path = __DIR__ . '/' . $f;
if(!file_exists($path)){
    // allow traversal intentionally
    $path = __DIR__ . '/' . $f;
}
if(file_exists($path)){ header('Content-Type: application/octet-stream'); readfile($path); exit; }
echo "File not found";
?>