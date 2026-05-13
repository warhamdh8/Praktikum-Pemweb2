<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {

  $user = $_POST['username'];
  $pass = $_POST['password'];

  $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");

  if (mysqli_num_rows($cek) > 0) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $user;

    header("Location: index.php");
    exit;
  } else {
    echo "<script>alert('Login gagal!');</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
  <div class="col-md-4 mx-auto">
    <div class="card p-4 shadow">

      <h4 class="text-center mb-3">Login</h4>

      <form method="POST">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>

    </div>
  </div>
</div>

</body>
</html>