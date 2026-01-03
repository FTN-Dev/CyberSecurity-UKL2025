<!-- Injected: Bootstrap 5 & modern light-mode CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/css/custom-light.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous" defer></script>

<?php
$koneksi = new mysqli('db','root',getenv('MYSQL_ROOT_PASSWORD')?:'rootpass','rs_harapan_sehat');
//$koneksi = new mysqli("localhost","root","","rs_harapan_sehat");
?>
