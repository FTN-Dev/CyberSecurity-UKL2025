<?php
$conn = new mysqli('db','root', getenv('MYSQL_ROOT_PASSWORD') ?: 'rootpass', 'rs_harapan_sehat');

$q = $_GET['q'] ?? '';
$flag = "";

// Matikan mysqli exception agar tidak fatal error
mysqli_report(MYSQLI_REPORT_OFF);

// Jalankan query
$sql = "SELECT COUNT(*) as c FROM schedules WHERE hari='$q'";
$ok  = $conn->query($sql);

// Jika query gagal → anggap count=0 (untuk blind)
if (!$ok) {
    $c = 0;
} else {
    $c = $ok->fetch_assoc()['c'];
}


if ($c > 0) {
    $flag = @file_get_contents("flags/flag_blind_sqli.txt") ?: "UKL2025TKJ{blndSqli_908}";
}
?>
<div class="card card-ct p-4 mb-3">
    <h4>Jadwal Dokter (Blind SQLi Fixed)</h4>

    <form method="GET">
        <input type="hidden" name="page" value="schedule">
        <input name="q" class="form-control mb-2" placeholder="masukan payload yg menjadikan hasil true">
        <button class="btn btn-primary">Cek</button>
    </form>

    <div class="mt-2">Ada? <?php echo $c>0 ? 'Yes' : 'No'; ?></div>

    <?php if ($flag): ?>
    <div class="alert alert-success mt-3">FLAG: <?php echo htmlspecialchars($flag); ?></div>
    <?php endif; ?>
</div>
