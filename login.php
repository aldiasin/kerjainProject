<?php
require_once("app/config.php");

if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT id, username, password FROM users WHERE username=:username";
    $stmt = $db->prepare($sql);

    $params = array(
        ":username" => $username,
    );

    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location: kerjain.php");
        }
    } else {
        echo "<script>alert('Akun salah atau belum terdaftar!');</script>";
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
<img src="assets/img/login.png" alt="login">
<h2 class="login">Login</h2>
<form method="post" class="add-item">
    <input type="text" class="input-kerjaan" id="username" name="username" placeholder="Username" autocomplete="off" required>
    <input type="password" class="input-kerjaan" id="password" name="password" placeholder="Password" autocomplete="off" required>
    <p class="empty">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    <input type="submit" class="submit material-icons" name="login" value="fingerprint">
</form>
<?php require 'templates/footer.php'; ?>