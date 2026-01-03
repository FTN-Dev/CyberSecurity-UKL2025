<div class="card" style="padding:1rem; margin:1rem 0; background:#eef4ff; border-radius:8px;">
    <h3>FI Challenge 4 – Template Injection</h3>
    <p>
        Website ini menggunakan sistem template sederhana untuk menampilkan pengumuman.
        Template hanya berisi placeholder <b>{{TITLE}}</b> dan <b>{{BODY}}</b>.
        Karena input tidak difilter, Anda dapat memanipulasi template untuk melakukan
        <i>template injection</i> sehingga kode dapat dieksekusi.
    </p>
    <p><b>Tugas:</b> Gunakan template injection untuk memunculkan flag.</p>
    <p><b>Flag Format:</b> UKL2025</code></p>
    <hr>
</div>

<div class="announcement-card" style="border:1px solid #ccc; padding:1rem; border-radius:6px; background:#fff;">
    <h2>{{TITLE}}</h2>
    <p>{{BODY}}</p>
</div>

<div style="margin-top:1rem; background:#fffceb; padding:1rem; border-radius:6px; border:1px dashed #d4b300;">
    <b>Hint:</b><br>
    Anda dapat mencoba memasukkan payload kode ke dalam field <b>BODY</b>
    untuk melihat apakah sistem template menjalankan kode tersebut.
</div>
