<div class="card card-ct p-4 mb-3">
<h4>Profil Pasien</h4>
<p>Nama: Joni</p>
<div id="info"></div>

<?php
$flag_path = __DIR__ . '/flags/flag_dom_xss.txt';
$flag_value = file_exists($flag_path) ? trim(file_get_contents($flag_path)) : "FLAG NOT FOUND";
?>

<script>
window.DOM_FLAG = "<?= $flag_value ?>";
let h = decodeURIComponent(location.hash.substring(1)); // <-- FIX

document.getElementById('info').innerHTML = "Info tambahan: " + h;
</script>

</div>
