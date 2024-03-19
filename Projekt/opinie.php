<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep internetowy -Opinie</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style_main.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <?php
    include "connect.php";

    // Obsługa żądania POST do dodawania opinii
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sprawdzenie, czy przesłano wymagane dane
        if (empty($_POST["imie"]) || empty($_POST["opinia"])) {
            echo "Proszę wypełnić wszystkie pola formularza.";
        } else {
            $imie = $_POST["imie"];
            $opinia = $_POST["opinia"];

            // Przygotowanie i wykonanie zapytania SQL
            $sql = "INSERT INTO opinie (imie, opinia) VALUES ('$imie', '$opinia')";
            if ($conn->query($sql) === TRUE) {
    echo "<h2>Opinia dodana pomyślnie.</h2>";
    } else {
    echo "Błąd przy dodawaniu opinii: " . $conn->error;
    }
    }
    }

    $conn->close();
   ?>  
</main>
<footer class="footer fixed-bottom">
    <div class="container">
        <p>&copy; 2023 Sklep internetowy. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>
<script src="script.js"></script>
</body>
</html>