<!DOCTYPE html>
<html>
<head>
  <title>Księgarnia online</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container">

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
    </ul>
  </nav>
  <main>
    <div class="cart">
      <h2>Nowości</h2>
    <div class="book-grid">
      <div class="book">
        <img src="book1.jpg" alt="Złodziejka książek">
        <h3>Złodziejka książek</h3>
        <p>Przezabawna historia o dziewczynce, która uwielbia czytać książki i dzięki temu odkrywa tajemnicze miejsca i przygody.</p>
        <p class="price">39,99 zł</p>
        <button>Dodaj do koszyka</button>
      </div>
      <div class="book">
        <img src="book2.jpg" alt="Harry Potter i Kamień Filozoficzny">
        <h3>Harry Potter i Kamień Filozoficzny</h3>
        <p>Pierwsza część słynnej serii o Harrym Potterze, chłopcu, który dowiaduje się o swoim magicznym pochodzeniu i wyrusza do szkoły czarodziejów.</p>
        <p class="price">49,99 zł</p>
        <button>Dodaj do koszyka</button>
      </div>
      <div class="book">
        <img src="book3.jpg" alt="Dziady">
        <h3>Dziady</h3>
        <p>Klasyczna polska powieść romantyczna autorstwa Adama Mickiewicza, opowiadająca o losach Polaków podczas powstania listopadowego.</p>
        <p class="price">29,99 zł</p>
        <button>Dodaj do koszyka</button>
      </div>
      <div class="book">
        <img src="book4.jpg" alt="Dziady">
        <h3>Krzyżacy</h3>
        <p>powieść historyczna Henryka Sienkiewicza publikowana w latach 1897–1900 w „Tygodniku Illustrowanym”, wydana w 1900 w Warszawie przez wydawnictwo „Gebethner i Wolff”; rękopis powieści przechowuje Biblioteka Narodowa.</p>
        <p class="price">49,99 zł</p>
        <button>Dodaj do koszyka</button>
      </div>
    </div>
<script src="koszyk.js"></script>
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
</div>
</body>
</html>
