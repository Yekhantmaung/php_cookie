<?php
// Expire the cookie
setcookie("username", "", time() - 3600, "/");
header("Location: login.php");
exit();
?>