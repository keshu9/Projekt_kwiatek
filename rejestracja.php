<?php include 'database.php'; ?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rejestracja</title>
  <link rel="stylesheet" href="rejestacja.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="left-panel"></div>
    <div class="right-panel">
      <form class="form" method="post">
        <h1>Rejestracja</h1>

        <label>Imię:</label>
        <input type="text" name='imie' required>

        <label>Nazwisko:</label>
        <input type="text" name='nazwisko' required>

        <label>Adres e-mail:</label>
        <input type="email" name='email' required>

        <label>Hasło:</label>
        <input type="password" name='haslo' required>

        <label>Powtórz hasło:</label>
        <input type="password" required>

        <button type="submit">Zarejestruj się</button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $imie = $_POST["imie"];
          $nazwisko = $_POST["nazwisko"];
          $email = $_POST["email"];
          $haslo = $_POST["haslo"];
          $sql = "INSERT INTO users(imie,nazwisko,email,password) VALUES ('$imie','$nazwisko','$email','$haslo')";
          mysqli_query($conn, $sql);
          session_start();
          $_SESSION['email'] = $_POST['email'];
          $_SESSION['logged_in'] = 'yes';
          header("Location: index.php");
        }
        ?>

        <p class="login-link">Masz już konto? <a href="#">Zaloguj się!</a></p>
      </form>
    </div>
  </div>
</body>

</html>