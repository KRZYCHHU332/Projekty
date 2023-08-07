<!DOCTYPE html>
<html>
<head>
  <title>Księgarnia online</title>
  <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>
<body>
<div class="container">

  <header>
  <a href="stronka.php"><h1>Księgarnia online</h1></a>
  </header>
  <nav>
  <ul>
    <li><a href="stronka.php">Strona główna</a></li>
      <li><a href="ksiazki.php">Książki</a></li>
      <li><a href="autorzy.php">Autorzy</a></li>
      <li><a href="gatunki.php">Gatunki</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
      <li><a href="rejestracja.php">Rejestracja</a></li>

  </nav>
  </nav>
 
  <main>
  <?php
  if (isset($_POST['submit'])) {
    // Pobierz dane z formularza
    $conn = mysqli_connect('localhost','root','','ksiegarnia');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
	    // Sprawdź, czy podane hasła są takie same
    if ($password !== $password2) {
      $error_msg = 'Podane hasła różnią się od siebie!';
    } else {
      // Sprawdź, czy nie ma już użytkownika o takim loginie lub adresie email
      $query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        $error_msg = 'Istnieje już użytkownik o takim loginie lub adresie email!';
      } else {
        // Jeśli wszystko jest w porządku, dodaj nowego użytkownika do bazy danych
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
          $success_msg = 'Rejestracja przebiegła pomyślnie!';
        } else {
          $error_msg = 'Wystąpił błąd podczas rejestracji!';
        }
      }
    }
  }
?>
<form method="post" action="">
  <h1>Rejestracja</h1>
  <label for="username">Nazwa użytkownika:</label><br>
  <input type="text" name="username" required><br>
  <label for="email"> Adres email:</label><br>
  <input type="email" name="email" required><br>
  <label for="password"> Hasło:</label><br>
  <input type="password" name="password" required><br>
  <label for="password2"> Powtórz hasło:</label><br>
  <input type="password" name="password2" required><br><br>
  <input type="submit" name="submit" value="Zarejestruj się">
</form>

<?php
  if (isset($error_msg)) {
    echo '<p style="color:red">'.$error_msg.'</p>';
  }
  if (isset($success_msg)) {
    echo '<p style="color:green">'.$success_msg.'</p>';
  }
?>
  </main>
  <footer>
    <p>Copyright &copy; Księgarnia online</p>
    <p>
      <a href="polityka_prywatnosci.txt">Polityka prywatności</a> |
      <a href="regulamin.txt">Regulamin</a> |
      <a href="kontakt.php">Kontakt</a>
    </p>
  </footer>
</div>
</body>
</html>
