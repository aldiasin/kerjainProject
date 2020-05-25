<?php require 'templates/header.php'; ?>
<h1 class="header">Kerjain</h1>
<img src="assets/img/about.png" alt="about">
<form class="add-item">
    <h2 class="login">Tentang</h2>
    <p class="empty">Studies have shown that people perform
        better when they have written down what they need to do. <span style="color: var(--cl-4)">- kata orang</span></p>
    <h3 class="login">Dengan rendah hati</h3>
    <p class="empty">
        Perkenalkan ini <span style="color: var(--cl-4)">kerjain</span>, sebuah aplikasi to-do list sederhana berbasis web.
        Dibangun dengan filosofi KISS (Keep it simple, stupid!), <span style="color: var(--cl-4)">kerjain</span> mencoba menghadirkan pengalaman basic to-do list
        dimana pengguna menuliskan segala hal yang ingin dilakukan (not necessarily in order) dan menandai ketika sudah selesai dikerjakan.
        Saya pikir, basic to-do list adalah media yang bagus untuk brainstorming. Lagi pula <span style="color: var(--cl-4)">kerjain</span> dapat digunakan pribadi/personal
        maupun kelompok/organisasi.
    </p>
    <h3 class="login">Kamu bisa</h3>
    <ul class="items">
        <li style="align-items: center"><a href="" class="done-button material-icons">add_circle</a> Tambah kerjaan</li>
        <li><a href="" class="done-button material-icons">delete</a> Hapus kerjaan</li>
        <li><a href="" class="done-button material-icons">assignment_turned_in</a> Tandai kerjaan selesai</li>
        <li><a href="" class="done-button material-icons">assignment_late</a> Urungkan kerjaan selesai</li>
        <li><a href="" class="done-button material-icons">search</a> Cari kerjaan belum selesai</li>
    </ul>
    <p class="empty">Voice note, Dark mode, dan lainnya update soon.</p>
    <h3 class="login">FAQ</h3>
    <p class="empty">
        <b>Bagaimana caranya menghapus akun?</b><br><br>
        Jika kamu benar-benar ingin menghapus akunmu, silakan menekan tombol remove account pada
        halaman kerjaan. Pastikan seluruh daftar kerjaan sudah dihapus, atau semua kerjaanmu akan tetap tersimpan di sistem.
        Tenang saja data kamu tidak akan mucul kembali ketika seseorang mendaftar akun dengan username yang sama
        sepertimu dahulu.
        <br><br>
        <b>Aku tertarik memberi masukan!</b><br><br>
        Silakan menuju <a href="comment.php">daftar masukkan</a>.
<br><br>
<b>Saya ingin lihat 10 datanya mana, saya harus ngisi sendiri?</b><br><br>
        Oh iya, maaf bu. Silakan ibu masuk sebagai saya, di sana sudah ada daftar kerjaan saya pribadi :v username dan passwordnya "aldi". Kalau ada yang aneh pokoknya bukan dari saya! Sama-sama.
    </p>
    <h3 class="login">Beri saya tambahan motivasi</h3><br>
    <img src="assets/img/donasi.jpg" alt="about">
    <p class="empty">
        Berapapun besarnya dukungan dari kamu, akan sangat bermanfaat untuk kelanjutan project ini. Terimakasih :)
    </p>
    <input type="button" class="submit material-icons" value="cancel" onclick="history.go(-1)">
</form>
<?php require 'templates/footer.php'; ?>