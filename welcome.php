<?php
session_start(); // TODO 1

// TODO 2
if (isset($_SESSION['login_user'])) {

    // TODO 3
    $loggedInUser = $_SESSION['login_user'];

    // TODO 4
    echo "<h1>Chào mừng trở lại, $loggedInUser!</h1>";
    echo "<p>Bạn đã đăng nhập thành công.</p>";

    // TODO 5
    echo '<a href="login.html">Đăng xuất (Tạm thời)</a>';

} else {
    // TODO 6
    header('Location: login.html');
    exit;
}
?>
