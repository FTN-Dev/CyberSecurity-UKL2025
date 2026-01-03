<!-- Injected: Bootstrap 5 & modern light-mode CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/css/custom-light.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous" defer></script>

<?php include '../config/db.php'; $data=$koneksi->query('SELECT * FROM patients'); ?>
<h2>Data Pasien</h2><a href='add.php'>Tambah</a><ul>
<?php while($d=$data->fetch_assoc()){ echo "<li>{$d['nama']} - <a href='edit.php?id={$d['id']}'>Edit</a></li>"; } ?>
</ul>