<?php
// If already logged in, redirect to dashboard
if (isset($_COOKIE['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === "Username" && $password === "user123") {
        // Set cookie (expires in 1 hour)
        setcookie("username", $username, time() + 3600, "/");
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Login failed!. Try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login with Cookie</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }

        form {
            padding: 20px;
            background: #f2f2f2;
            border-radius: 10px;
        }

        input {
            padding: 10px;
            margin: 10px 0;
            width: 90%;
        }

        button {
            padding: 10px;
            background: #0066cc;
            color: white;
            border: none;
            width: 100%;
            border-radius: 5px;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Login</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter username" required><br>
        <input type="password" name="password" placeholder="Enter password" required><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

</body>
</html>