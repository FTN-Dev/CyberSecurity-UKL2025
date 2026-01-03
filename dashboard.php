<!-- Injected: Bootstrap 5 & modern light-mode CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/css/custom-light.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous" defer></script>


<h2>Dashboard</h2><a href='patients/index.php'>Data Pasien</a> | <a href='doctors/index.php'>Data Dokter</a>

<!-- &file=flag.txt -->


<?php
// -------------------------------
//  LFI SIMULATION (Sandbox CTF)
// -------------------------------

if (isset($_GET['file'])) {

    // folder aman khusus untuk challenge
    $base = __DIR__ . '/safe_files/';

    // input raw dari parameter
    $input = $_GET['file'];

    // gabungkan dengan path base
    $target = $base . $input;

    echo "<div class='card card-ct p-3 mt-3'>";
    echo "<h5>LFI Debug Viewer</h5>";

    if (file_exists($target)) {
        echo "<pre>".htmlspecialchars(file_get_contents($target))."</pre>";
    } else {
        echo "File tidak ditemukan.";
    }

    echo "</div>";
}
?>
