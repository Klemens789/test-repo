<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sklep internetowy - Strona główna</title>
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
<section>
  <section class="banner container-fluid">
    <div class="container-fluid">
    <h2 class="banner-title">Promocja na gry!</h2>
    <p class="banner-description">Odkryj najlepsze gry w niesamowitych cenach!</p>
    </div>
   </section>

      <h2 class="mt-4">Bestsellery!</h2>
    <div class="kontener container-fluid">
      <div class="product">
           <img src="img/product1.jpg" alt="Product 1">
         <h3>Wiedzmin 3</h3>
         <p>Wiedźmin 3: Dziki Gon (The Witcher 3: Wild Hunt) to jedna z najbardziej znanych i cenionych gier wideo, stworzona przez polskie studio CD Projekt RED. Gra została wydana w maju 2015 roku i jest trzecią częścią popularnej serii gier opartych na książkach Andrzeja Sapkowskiego.

           Wiedźmin 3: Dziki Gon przenosi graczy do ogromnego otwartego świata fantasy, znanego jako Kontynent. Wcielamy się w rolę Geralta z Rivii, wiedźmina - wynajętego zabójcy potworów, który posiada nadprzyrodzone zdolności i przeszedł surowe treningi. Naszym zadaniem jest odnalezienie zaginionej adoptowanej córki Geralta, Ciri, która jest obiektem pożądania wielu potężnych postaci w świecie gry.</p>
           <a class="btn btn-primary" href="produkty.php">Zobacz więcej</a>
      </div>
      <div class="product">
        <img src="img/product2.jpg" alt="Product 2">
        <h3>Fifa 23</h3>
         <p>FIFA 23 oferuje wiele trybów rozgrywki, które umożliwiają zarówno rozgrywkę jednoosobową, jak i wieloosobową. W trybie kariery możemy objąć kontrolę nad klubem piłkarskim jako menadżer, prowadzić transfery, rozwijać drużynę i prowadzić ją do sukcesów. Możemy także wcielić się w rolę zawodnika i pokierować karierą piłkarską od podstaw, rozwijając swoje umiejętności i zdobywając sławę na boisku.

          Tryb Ultimate Team jest jednym z najbardziej popularnych w grze FIFA 23. Pozwala on na tworzenie swojej drużyny, składając ją z kart zawodników, które możemy zdobyć poprzez otwieranie paczek lub uczestniczenie w różnych wydarzeniach. Możemy rywalizować z innymi graczami online, budować swoją drużynę i awansować w rankingu.</p>
          <a class="btn btn-primary" href="produkty.php">Zobacz więcej</a>
        </div>
      <div class="product">
       <img src="img/product3.jpg" alt="Product 3">
       <h3>Battlefield 2042</h3>
       <p>Battlefield to popularna seria gier komputerowych z gatunku first-person shooter, która skupia się na intensywnych bitwach wieloosobowych. Wydana przez firmę Electronic Arts, Battlefield oferuje graczom dynamiczną i epicką rozgrywkę, osadzoną w różnych realistycznie odwzorowanych konfliktach wojskowych.

        Seria Battlefield słynie z rozbudowanych map, które pozwalają na prowadzenie walki zarówno na lądzie, w powietrzu, jak i na morzu. Gracze mają do dyspozycji szeroki wybór pojazdów, takich jak czołgi, samoloty, śmigłowce, łodzie czy motocykle, co dodaje dynamiki i różnorodności do rozgrywki.</p>
        <a class ="btn btn-primary" href="produkty.php">Zobacz więcej</a>
      </div>      
    </div>
      

    
    <section class="opinie">
       <h2>Opinie klientów</h2>
      <form id="formOpinia" action="opinie.php" method="POST">
        <input type="text" id="imie" name="imie" placeholder="Twoje imię" required>
        <textarea id="opinia" name="opinia" placeholder="Twoja opinia" required></textarea>
        <button type="submit" name="submit">Dodaj opinię</button>
      </form>
      </section>

      <div class="kontener-button">
        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        <a href="https://twitter.com/?lang=pl" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
        <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
        <a href="https://github.com/" class="fa fa-github"></a>  
      </div>
      

</section>
  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Sklep internetowy. Wszelkie prawa zastrzeżone.</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
