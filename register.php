<?php
require_once("app/config.php");

if (isset($_POST['register'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":username" => $username,
        ":password" => $password,
    );
    $saved = $stmt->execute($params);
    if ($saved) {
        header("Location: login.php");
    } else {
        echo "<script>alert('Akun sudah terdaftar atau username tidak tersedia!');</script>";
    }
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
<h2 class="login">Registrasi</h2>
<form method="post" class="add-item">
    <input type="text" class="input-kerjaan" id="username" name="username" placeholder="Username" autocomplete="off" required>
    <input type="password" class="input-kerjaan" id="password" name="password" placeholder="Password" autocomplete="off" required>
    <p class="empty">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    <input type="submit" class="submit material-icons" name="register" value="fingerprint">
</form>
<?php require 'templates/footer.php'; ?>