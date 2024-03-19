<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sklep internetowy - Galeria</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="style_main.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <header>
    <div class="container">
      <a href="index.php"><span>GAME ZONE</span></a>
      <nav>
        <ul>
          <li><a href="index.php">Strona główna</a></li>
          <li><a href="produkty.php">Produkty</a></li>
          <li><a href="koszyk.php">Koszyk</a></li>
          <li><a href ="galeria.php">Galeria</a></li>
          <li><a href="onas.php">O nas</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <section class="naglowek">
      <h2>Galeria zdjęć z rozrgrywki</h2>
    </section>
   <div id="galeria">
   <img src="img/zdjecie1.jpg" alt="Zdjęcie 1">
   <img src="img/zdjecie2.jpg" alt="Zdjęcie 2">
   <img src="img/zdjecie3.jpg" alt="Zdjęcie 3">
   <img src="img/zdjecie4.jpg" alt="Zdjęcie 4">
   <img src="img/zdjecie5.jpg" alt="Zdjęcie 5">
   <img src="img/zdjecie6.jpg" alt="Zdjęcie 6">
   <img src="img/zdjecie7.jpg" alt="Zdjęcie 7">
   <img src="img/zdjecie8.jpg" alt="Zdjęcie 8">
</div>
<div id="cont-button">
 <button id="prevButton">Poprzednie</button>
 <button id="nextButton">Następne</button>
</div>

  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Sklep internetowy. Wszelkie prawa zastrzeżone.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
