<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logowanie</title>
  <link rel="stylesheet" href="login.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="left-panel"></div>
    <div class="right-panel">
      <form class="form" method="post">

        <h1>Zaloguj się!</h1>

        <label>E-mail:</label>
        <input type="text" name='email' required>

        <label>Hasło:</label>
        <input type="password" required>

        <button type="submit">Zaloguj się</button>

        <p class="login-link"><a href="#">Nie pamiętasz hasła?</a></p>
      </form>
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['logged_in'] = 'yes';
        header("Location: index.php");
      }
      ?>
    </div>
  </div>
</body>

</html>