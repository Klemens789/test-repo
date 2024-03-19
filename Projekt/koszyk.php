<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sklep internetowy - Koszyk</title>
  <link rel="stylesheet" href="styles.css">
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

  <main class="container mt-4">
    <section>
      <h2 class="mb-4">Koszyk</h2>
       <?php
         // Rozpoczęcie sesji
         session_start();
         // Dodawanie produktu do koszyka
         if (isset($_POST['produkt_id'])) {
             $productId = $_POST['produkt_id'];
             $productName = $_POST['nazwa'];
             $productPrice = $_POST['cena'];
         
             // Sprawdzenie, czy koszyk jest już przechowywany w sesji
             if (!isset($_SESSION['cart'])) {
                 $_SESSION['cart'] = array();
             }
         
             // Dodanie produktu do koszyka w sesji
             $product = array(
                 'id' => $productId,
                 'name' => $productName,
                 'price' => $productPrice
             );
         
             $_SESSION['cart'][] = $product;
         
             echo "Produkt został dodany do koszyka.";
         }
         // Usuwanie
         if (isset($_GET['clearCart'])) {
          unset($_SESSION['cart']);
      
          // Przekierowanie na stronę koszyka
          header('Location: koszyk.php');
          exit();
      }
         
         // Wyświetlanie produktów w koszyku
         if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
             echo "<h2>Twój koszyk:</h2>";
             foreach ($_SESSION['cart'] as $product){
                 echo "Nazwa: " . $product['name'] . "<br>";
                 echo "Cena: " . $product['price'] . "zł<br>";
                 echo "<br>";
             }
            echo "<a class=\"btn btn-primary \" href='koszyk.php?clearCart=true'>Wyczyść koszyk</a>";
            echo "<form class=\"submit\" action='zamów.php' method='POST'>";
            echo "<input class=\"btn btn-primary mb-4\" type='submit' value='Zamów' name='submit'>";
            echo "</form>";
         } else {
             echo "Twój koszyk jest pusty.";
         }
       ?>
    </section>
  </main>

  <footer class="footer fixed-bottom">
    <div class="container">
      <p>&copy; 2023 Sklep internetowy. Wszelkie prawa zastrzeżone.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>

