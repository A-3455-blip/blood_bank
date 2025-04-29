<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple admin check
    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['admin'] = $username;
        header('Location: admin_dashboard.php');
    } else {
        $error = "Invalid Credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Admin Login</h2>
    <form method="POST" class="mt-4">
        <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
        <div class="mb-3">
            <input type="text" name="username" placeholder="Username" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-danger w-100">Login</button>
    </form>
</div>

</body>
</html>