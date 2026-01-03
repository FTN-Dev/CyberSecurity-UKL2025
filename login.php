<?php
$err='';
if($_SERVER['REQUEST_METHOD']==='POST'){
 $u=$_POST['username']; $p=$_POST['password'];
 $conn = new mysqli('db','root',getenv('MYSQL_ROOT_PASSWORD')?:'rootpass','rs_harapan_sehat');
 $res = $conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
 if($res && $res->num_rows>0){ echo "<div class='alert alert-success'>Login sukses. Flag: <span class='flag'>UKL2025TKJ{sqliByps_612}</span></div>";}
 else $err='Login gagal';
}
?>
<div class="card card-ct p-4 mb-3">
<h4>Login Admin</h4>
<form method="post">
<input name="username" class="form-control mb-2" placeholder="username">
<input name="password" type="password" class="form-control mb-2" placeholder="password">
<button class="btn btn-danger">Login</button>
</form>
<?php if($err) echo "<div class='text-danger'>$err</div>"; ?>
</div>