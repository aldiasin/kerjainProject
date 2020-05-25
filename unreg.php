<?php
require_once("app/config.php");

if (isset($_POST['unregister'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $sql = "DELETE FROM users WHERE username=:username";
    $stmt = $db->prepare($sql);

    $params = array(
        ":username" => $username,
    );

    $stmt->execute($params);
    header("Location: index.php");
}
?>

<?php require 'templates/header.php'; ?>
<div class="fab-container">
    <div class="fab fab-icon-holder">
        <span class="option-menu material-icons">trip_origin</span>
    </div>
    <ul class="fab-options">
        <li>
            <a href="about.php" class="fab-icon-holder" id="about">
                <span class="option-menu material-icons">help</span>
            </a>
        </li>
    </ul>
</div>
<script src="assets/time.js"></script>
<div id="showtime" class="displaytime"></div>
<h1 class="header">Kerjain</h1>
<img src="assets/img/login.png" alt="registrasi">
<h2 class="login">Unregistrasi</h2>
<p class="empty">Yakin ingin hapus akun? <a href="kerjain.php">Tidak, saya khilaf</a></p>
<form method="post" class="add-item">
    <input type="text" class="input-kerjaan" id="username" name="username" placeholder="Username" autocomplete="off" required>
    <input type="submit" class="submit material-icons" name="unregister" value="fingerprint">
</form>
<?php require 'templates/footer.php'; ?>