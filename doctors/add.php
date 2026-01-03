<!-- Injected: Bootstrap 5 & modern light-mode CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/css/custom-light.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous" defer></script>

<?php include '../config/db.php'; if($_POST){$n=$_POST['nama'];$s=$_POST['spesialis']; $koneksi->query("INSERT INTO doctors(nama,spesialis) VALUES('$n','$s')"); header('Location: index.php'); } ?>
<form method='post'>Nama:<input name='nama'> Spesialis:<input name='spesialis'><button>Simpan</button></form>