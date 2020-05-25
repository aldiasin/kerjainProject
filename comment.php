<?php
require_once "app/auth.php";
$itemquery = $db->prepare("SELECT * FROM comm");
$itemquery->execute();
$items = $itemquery->rowCount() ? $itemquery : [];
?>

<?php require 'templates/header.php'; ?>
<div class="fab-container">
    <div class="fab fab-icon-holder">
        <span class="option-menu material-icons">trip_origin</span>
    </div>
    <ul class="fab-options">
        <li>
            <a href="#top" class="fab-icon-holder">
                <span class="option-menu material-icons">keyboard_arrow_up</span>
            </a>
        </li>
        <li>
            <a href="#input-kerjaan" class="fab-icon-holder" onclick="input-kerjaan">
                <span class="option-menu material-icons">add_circle</span>
            </a>
        </li>
        <li>
            <a href="kerjain.php" class="fab-icon-holder">
                <span class="option-menu material-icons">check_circle</span>
            </a>
        </li>
        <li>
            <a href="about.php" class="fab-icon-holder" id="about">
                <span class="option-menu material-icons">help</span>
            </a>
        </li>
    </ul>
</div>
<script src="assets/time.js"></script>
<div id="showtime" class="displaytime"></div>
<p class="empty" onclick="requestremove();"><a href="unreg.php">Remove Account</a></p>
<script>
    function requestremove() {
        alert('Pastikaan seluruh daftar kerjaan sudah kamu hapus, atau sistem akan tetap menyimpan kerjaanmu meskipun akun sudah dihapus.');
    }
</script>
<p class="empty"><a href="logout.php">Logout</a></p>
<h1 class="header">Kerjain</h1>
<img src="assets/img/comment.png" alt="registrasi dan login">
<?php if (!empty($items)) : ?>
    <h2 class="login">Daftar Masukkan</h2>
    <ul class="items">
        <?php foreach ($items as $item) : ?>
            <li>
                <span class="item"><?php echo $item['comment']; ?></span>
                <a href="removecomm.php?item=<?php echo $item['id'] ?>" class="done-button material-icons">delete</a>
                <br>
                <span class="item-updated">masukkan dari pengguna no id #<?php echo $item['user']; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p class="empty">belum ada masukanku</p>
<?php endif; ?>
<form action="addcomm.php" method="post" class="add-item">
    <input type="text" class="input-kerjaan" id="input-kerjaan" name="comm" placeholder="Beri masukkan" autocomplete="off" required>
    <input type="submit" class="submit material-icons" value="add_circle">
</form>
<?php require 'templates/footer.php'; ?>