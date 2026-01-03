<?php
$f = $_GET['filename'] ?? 'access.log';
$path = __DIR__ . '/mer/de/ka/' . $f;
if(file_exists($path)){ echo "<pre>".htmlspecialchars(file_get_contents($path))."</pre>"; }
else echo "Not found";
?>
