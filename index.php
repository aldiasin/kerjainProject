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
<img src="assets/img/login.png" alt="registrasi dan login">
<form action="register.php" class="add-item">
    <h2 class="login">Registrasi</h2>
    <input type="submit" class="submit material-icons" value="fingerprint">
</form>
<form action="login.php" class="add-item">
    <h2 class="login">Login</h2>
    <input type="submit" class="submit material-icons" value="fingerprint">
</form>
<?php require 'templates/footer.php'; ?>