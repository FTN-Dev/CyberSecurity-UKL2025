<?php
$ann = $_GET['ann'] ?? 'Selamat datang di RS Harapan Sehat';

// FILTER BYPASS CHALLENGE
$blocked = str_ireplace(
    array('<script>', '</script>', '<script', 'script>'),
    '',
    $ann
);

// Load flag
$flag_path = __DIR__ . '/flags/flag_xss_bypass.txt';
$flag_value = file_exists($flag_path) ? trim(file_get_contents($flag_path)) : "FLAG NOT FOUND";
?>

<div class="card card-ct p-4 mb-3">
<h4>Pengumuman</h4>

<form method="GET">
    <input type="hidden" name="page" value="announcements">
    <input name="ann" class="form-control" value="<?php echo htmlspecialchars($ann); ?>">
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<hr>

<!-- Raw output yang rentan (XSS Bypass target) -->
<div><?php echo $blocked; ?></div>
</div>

<script>
window.BYPASS_FLAG = "<?= $flag_value ?>";
</script>
