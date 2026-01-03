<?php
// Vulnerable include page
$pagefile = $_GET['pagefile'] ?? 'home.php';
// Intentionally vulnerable: no sanitization
if (strpos($pagefile, 'http') === 0) {
    // remote include allowed (for CTF)
    @include($pagefile);
    $rfi = @include($pagefile);

    // Jika include berhasil (return value tidak false)
    if ($rfi !== false) {
        echo "<div style='padding:10px;margin:10px;background:#fff2cc;
                     border-radius:8px;font-family:monospace;'>";
        echo "FLAG: UKL2025TKJ{rfiRmt_745}";
        echo "</div>";
    } else {
        echo "<b>RFI gagal: tidak dapat memuat remote URL.</b>";
    }
} else {
    @include($pagefile);
}
?>
