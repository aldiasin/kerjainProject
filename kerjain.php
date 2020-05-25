<?php
require_once "app/auth.php";
$itemquery = $db->prepare("SELECT id, name, created, done FROM items WHERE user=:user");
$itemquery->execute(['user' => $_SESSION['user_id']]);
$items = $itemquery->rowCount() ? $itemquery : [];
?>

<?php require 'templates/header.php'; ?>
<div class="fab-container">
    <div class="fab fab-icon-holder">
        <span class="option-menu material-icons">trip_origin</span>
    </div>
    <ul class="fab-options">
        <li>
            <a href="#input-search" class="fab-icon-holder">
                <span class="option-menu material-icons">search</span>
            </a>
        </li>
        <li>
            <a href="#input-kerjaan" class="fab-icon-holder" onclick="input-kerjaan">
                <span class="option-menu material-icons">add_circle</span>
            </a>
        </li>
        <li>
            <a href="comment.php" class="fab-icon-holder">
                <span class="option-menu material-icons">comment</span>
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
    function requestremove(){
    alert('Pastikaan seluruh daftar kerjaan sudah kamu hapus, atau sistem akan tetap menyimpan kerjaanmu meskipun akun sudah dihapus.');
    }
</script>
<p class="empty"><a href="logout.php">Logout</a></p>
<h1 class="header">Kerjain</h1>
<img src="assets/img/todo.png" alt="registrasi dan login">
<input type="text" onkeyup="imu(this.value)" class="input-search" id="input-search" placeholder="Cari kerjaan belum selesai...">
<div id="content"></div>
<script src="assets/search.js"></script>
<?php if (!empty($items)) : ?>
    <ul class="items">
        <?php foreach ($items as $item) : ?>
            <li>
                <span class="item <?php echo $item['done'] ? 'done' : '' ?>"><?php echo $item['name']; ?></span>
                <?php if (empty($item['done'])) : ?>
                    <a href="done.php?as=1&&item=<?php echo $item['id'] ?>" class="done-button material-icons">assignment_turned_in</a>
                <?php endif; ?>
                <?php if ($item['done']) : ?>
                    <a href="done.php?as=0&&item=<?php echo $item['id'] ?>" class="done-button material-icons">assignment_late</a>
                <?php endif; ?>
                <a href="remove.php?item=<?php echo $item['id'] ?>" class="done-button material-icons">delete</a>
                <br>
                <span class="item-updated"><?php echo $item['created']; ?> - terakhir diubah</span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p class="empty">belum ada kerjaan nih</p>
<?php endif; ?>
<form action="add.php" method="post" class="add-item">
    <input type="text" class="input-kerjaan" id="input-kerjaan" name="name" placeholder="Tambahin kerjaan" autocomplete="off" required>
    <input type="submit" class="submit material-icons" value="add_circle">
</form>
<?php require 'templates/footer.php'; ?>