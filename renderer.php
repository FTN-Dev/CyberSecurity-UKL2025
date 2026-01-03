<?php

// sanitasi: hanya nama file valid
$template = $_GET['tpl'] ?? 'default';
if (!preg_match('/^[a-zA-Z0-9_\-]+$/', $template)) {
    die("Template tidak valid.");
}

$path = __DIR__ . "/templates/" . $template . ".tpl";
if (!file_exists($path)) {
    die("Template tidak ditemukan.");
}

// ambil isi template
$content = file_get_contents($path);

// narasi default
$title = $_GET['title'] ?? 'Halaman Renderer';
$body  = $_GET['body']  ?? 'Tidak ada konten dikirimkan.';

// Ganti placeholder
$rendered = str_replace(
    ['{{TITLE}}', '{{BODY}}'],
    [htmlspecialchars($title), htmlspecialchars($body)],
    $content
);

// Tampilkan hasil ke user
echo $rendered;

// Cek apakah peserta berhasil “mengganggu” template
if (strpos($rendered, 'INJECT_OK') !== false) {
    echo "<div class='flag-box'>FLAG: UKL2025TKJ{tplInj_921}</div>";
}
?>
