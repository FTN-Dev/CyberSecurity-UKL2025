<!-- Injected: Bootstrap 5 & modern light-mode CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/css/custom-light.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous" defer></script>

<?php include '../config/db.php'; $id=$_GET['id']; if($_POST){$n=$_POST['nama']; $koneksi->query("UPDATE patients SET nama='$n' WHERE id=$id"); header('Location: index.php'); } $d=$koneksi->query("SELECT * FROM patients WHERE id=$id")->fetch_assoc(); ?>
<form method='post'>Nama: <input name='nama' value='<?php echo $d['nama']; ?>'><button>Simpan</button></form>