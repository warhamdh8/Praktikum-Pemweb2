<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">Portofolio</a>

    <ul class="navbar-nav ms-auto align-items-center">

      <li class="nav-item">
        <a class="nav-link" href="?page=home">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=about">About</a>
      </li>

      <!-- DROPDOWN -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          My Studies
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="?page=level">Level</a></li>
          <li><a class="dropdown-item" href="?page=studies">Studies</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=project">Project</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=contact">Contact</a>
      </li>

      <!-- LOGIN / LOGOUT -->
      <li class="nav-item ms-3">
        <?php if (isset($_SESSION['login'])): ?>
          
          <span class="text-white me-2">
            Halo, <?= $_SESSION['username']; ?>
          </span>

          <a href="logout.php" class="btn btn-light btn-sm">
            Logout
          </a>

        <?php else: ?>

          <a href="login.php" class="btn btn-outline-light btn-sm">
            Login
          </a>

        <?php endif; ?>
      </li>

    </ul>
  </div>
</nav>