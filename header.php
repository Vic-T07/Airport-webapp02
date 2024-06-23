<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script>
    function openModal(modalId) {
      document.getElementById(modalId).style.display = 'block';
    }

    function closeModal(modalId) {
      document.getElementById(modalId).style.display = 'none';
    }

    window.onclick = function(event) {
      if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
      }
    }
  </script>
</head>

<body>
  <header>
    <a href="index.php"><img class="logo-place" src="assets/img/Logo.png" alt=""></a>
    <div class="header-position">
      <?php if (isset($_SESSION['logged_in'])) : ?>
        <a href="boeken.php">
          <li>Boeken</li>
        </a>
        <a href="service.php">
          <li>Service</li>
        </a>
        <a href="inchecken.php">
          <li>Inchecken</li>
        </a>
      <?php else : ?>
        <a href="#" onclick="openModal('loginModal')">
          <li>Boeken</li>
        </a>
        <a href="service.php">
          <li>Service</li>
        </a>
        <a href="inchecken.php">
          <li>Inchecken</li>
        </a>
      <?php endif; ?>
    </div>
    <img class="nl-place" src="assets/img/image 2.png" alt="">
    <div class="login-button">
      <?php if (isset($_SESSION['logged_in'])) : ?>
        <a href="admin.php" class="username-display"><li><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></li></a>
        <a href="logout.php" class="logout-button">Logout</a>
      <?php else : ?>
        <li class="inlog-button" onclick="openModal('loginModal')">Mijn VFE</li>
      <?php endif; ?>
    </div>
  </header>

  <div id="loginModal" class="modal">
    <form class="modal-content animate" action="inlog.php" method="post">
      <div class="img-container">
        <span onclick="closeModal('loginModal')" class="close" title="Close Modal">&times;</span>
        <img class="avatar" src="assets/img/VFE-logo.png" alt="Avatar">
      </div>
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button class="login-button" type="submit">Login</button>

        <div class="register-link">
          <p>Don't have an account? <a href="#" onclick="closeModal('loginModal'); openModal('registerModal');">Register</a></p>
        </div>
      </div>
    </form>
  </div>

  <div id="registerModal" class="modal">
    <form class="modal-content animate" action="register.php" method="post">
      <div class="img-container">
        <span onclick="closeModal('registerModal')" class="close" title="Close Modal">&times;</span>
        <img class="avatar" src="assets/img/VFE-logo.png" alt="Avatar">
      </div>
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button class="register-button" type="submit">Register</button>
      </div>
    </form>
  </div>

</body>

</html>
