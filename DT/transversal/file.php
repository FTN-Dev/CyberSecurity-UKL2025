<?php
// DT Challenge 4 – Traversal with Blacklist Bypass

$input = $_GET['file'] ?? 'home.txt';

// Developer thinks this stops traversal (sengaja insecure)
$filtered = str_replace('../', '', $input);

// File root
$base = __DIR__ . '/data';

// Final path
$target = $base . $filtered;

// Debug (optional)
// echo "Filtered: " . htmlspecialchars($filtered);

// Try to load file
if (file_exists($target)) {
    echo nl2br(htmlspecialchars(file_get_contents($target)));
} else {
    echo "File not found.";
}
