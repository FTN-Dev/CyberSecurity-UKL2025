<?php
$mysqli = new mysqli(
    getenv('DB_HOST') ?: 'db',
    'root',
    getenv('MYSQL_ROOT_PASSWORD') ?: 'rootpass',
    'rs_harapan_sehat'
);

// Ambil flag
$flag_path = __DIR__ . '/flags/flag_xss_strd.txt';
$flag_value = file_exists($flag_path) ? trim(file_get_contents($flag_path)) : "FLAG NOT FOUND";

if(!$mysqli->connect_errno){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name = $mysqli->real_escape_string($_POST['name']);
        $message = $_POST['message']; 
        $mysqli->query("INSERT INTO feedback(name,message) VALUES('$name', '$message')");
    }
    $res = $mysqli->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 3");
}
?>

<div class="card card-ct p-4 mb-3">
    <h4>Kritik & Saran</h4>

    <form method="post">
        <input name="name" class="form-control mb-2" placeholder="Nama">
        <textarea name="message" class="form-control mb-2" placeholder="Pesan"></textarea>
        <button class="btn btn-success">Kirim</button>
    </form>

    <hr>

    <!-- FLAG DIDEFINISIKAN SEBELUM PAYLOAD DIJALANKAN -->
    <script>
        window.FLAG = "<?= $flag_value ?>";
    </script>

    <?php
    if(isset($res)){
        while($r = $res->fetch_assoc()){
            echo "<div class='mb-2'><strong>".htmlspecialchars($r['name'])."</strong>
//                  <div>".$r['message']."</div></div>";
        }
    }
    ?>
</div>
