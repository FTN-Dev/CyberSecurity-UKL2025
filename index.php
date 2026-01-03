<?php
session_start();
$page = $_GET['page'] ?? 'home';
include 'header.php';
$allowed = ['home','renderer','dashboard','search','feedback','profile','announcements','login','records','schedule','download','image','viewlog','include','poison'];
if(in_array($page,$allowed)){
    include $page.'.php';
}else{
    echo "<div class='card card-ct p-4'><h4>Halaman tidak ditemukan</h4></div>";
}
include 'footer.php';
?>
