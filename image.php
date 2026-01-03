<?php
$img = $_GET['img'] ?? 'patient1.jpg';
$path = __DIR__ . '/assets/' . $img;
if(file_exists($path)){ header('Content-Type: image/jpeg'); readfile($path); exit; }
echo "Image not found";
?>
