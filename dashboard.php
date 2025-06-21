<?php
if (!isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_COOKIE['username']); ?>!</h2>
    <p>You are logged in using cookies.</p>
    <a href="logout.php">Logout</a>
</body>
</html>