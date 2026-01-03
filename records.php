<?php
$id = $_GET['id'] ?? '1';

$conn = new mysqli(
    'db',
    'root',
    getenv('MYSQL_ROOT_PASSWORD') ?: 'rootpass',
    'rs_harapan_sehat'
);

// ───── Tambah ini agar tidak melempar fatal error ─────
mysqli_report(MYSQLI_REPORT_OFF);
// ─────────────────────────────────────────────────────────

$q = "SELECT * FROM patients WHERE id=$id";

$res = $conn->query($q);

if (!$res) {
    echo "<div class='alert alert-warning'>SQL Error: " . htmlspecialchars($conn->error) . "</div>";

    // tampilkan flag
    $flagPath = __DIR__ . '/flags/flag_sqli_err.txt';

    if (is_readable($flagPath)) {
        $flag = trim(file_get_contents($flagPath));
        echo "<div class='alert alert-success'><b>FLAG:</b> " . htmlspecialchars($flag) . "</div>";
    } else {
        echo "<div class='alert alert-danger'>Flag file tidak dapat dibaca.</div>";
    }

    exit;
}

// normal output
while ($r = $res->fetch_assoc()) {
    echo "<div class='card card-ct p-3 mb-2'><h5>" . htmlspecialchars($r['nama']) . "</h5></div>";
}
