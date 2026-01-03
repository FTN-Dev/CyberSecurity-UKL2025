<?php
$q = $_GET['q'] ?? '';
?>
<div class="card card-ct p-4 mb-3">
<h4>Cari Pasien</h4>
<form method="get">
<input type="hidden" name="page" value="search">
<div class="mb-2"><input name="q" class="form-control" placeholder="nama pasien"></div>
<button class="btn btn-primary">Cari</button>
</form>

<?php
if($q!==''){
    
    // Tampilkan input (raw, tanpa sanitize)
    echo "<div class='mt-3'>Hasil pencarian untuk: <strong>" . $q . "</strong></div>";

    // Area flag (hidden by default)
    echo "<div id='flagBox' style='display:none;margin-top:10px;' class='alert alert-success'></div>";

    // Ambil flag dari folder flags
    $flag = trim(file_get_contents(__DIR__ . '/flags/flag_xss_rflct.txt'));

?>
<script>


setTimeout(() => {
    if (typeof xss_pwned !== 'undefined' && xss_pwned === true) {
        document.getElementById('flagBox').style.display = 'block';
        document.getElementById('flagBox').innerHTML = "<b>FLAG:</b> <?php echo $flag; ?>";
        alert("<?php echo $flag; ?>");
    }
}, 300);
</script>

<?php
}
?>
</div>
