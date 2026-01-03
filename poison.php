<?php
// This endpoint writes user-agent into a log file for poisoning
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'curl';
file_put_contents('logs/access.log', date('c')." ". $ua."\n", FILE_APPEND);
if (stripos($ua, 'curl') !== false) {
    echo "<div class='alert alert-success'>Flag: <span class='flag'>UKL2025TKJ{lfiPs_834}</span></div>";
    exit;
}
echo "Poisoned";

?>
