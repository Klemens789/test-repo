<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sklep internetowy - Produkty</title>
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
  <h2 class="mt-4">Najnowsze produkty</h2>
  <section>
  <div class="row">
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0">
        <img src="img/tomb_raider.jpg" class="card-img-top" alt="Tomb Raider">
        <div class="card-body">
          <h4 class="card-title">TOMB RAIDER</h4>
          <p class="card-text">Główną bohaterką jest archeolożka Lara Croft, która przemierza cały świat w celu przeszukiwania i badania starych grobowców i ruin. Do zadań gracza należy eksplorowanie otoczenia, walka z groźnymi wrogami, rozwiązywanie skomplikowanych zagadek czy unikanie pułapek.</p>
          <h5 class="card-text">CENA:199,99zł</h5>
          <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="1">
          <input type="hidden" name="nazwa" value="Tomb Raider">
           <input type="hidden" name="cena" value="199.99">
          <button class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0">
        <img src="img/wiedzmin.jpg" class="card-img-top" alt="wiedzmin">
        <div class="card-body">
          <h4 class="card-title">WIEDŹMIN 3</h4>
          <p class="card-text">
          Akcja gry toczy się w świecie wiedźmina, stworzonym przez Andrzeja Sapkowskiego. Głównym bohaterem gry, w którego wciela się gracz, jest Geralt z Rivii – jeden z wiedźminów, czyli postaci o nadludzkich zdolnościach, zajmujących się zwykle zabijaniem potworów atakujących siedliska ludzi.
          </p>
          <h5 class="card-text">CENA:149,99zł</h5>
          <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="2">
          <input type="hidden" name="nazwa" value="Wiedzmin 3">
           <input type="hidden" name="cena" value="149.99">
          <button  class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0">
        <img src="img/fifa.jpg" class="card-img-top" alt="fifa">
        <div class="card-body">
          <h4 class="card-title">FIFA 23</h4>
          <p class="card-text">FIFA 23 to trzydziesta główna odsłona serii gier piłkarskich tworzonych przez studio EA Sports. Zadaniem gracza jest wygrywanie meczów piłki nożnej i zdobywanie trofeów, mających przynieść chwałę jednej z setek licencjonowanych drużyn. O co chodzi w grze FIFA 23?
           Tryb FIFA 23 Ultimate Team umożliwia ci budowę drużyny.</p>
          <h5 class="card-text">CENA:169,99zł</h5>
          <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="3">
          <input type="hidden" name="nazwa" value="FIFA 23">
           <input type="hidden" name="cena" value="169.99">
          <button class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0">
        <img src="img/diablo.jpg" class="card-img-top" alt="Diablo">
        <div class="card-body">
          <h4 class="card-title">DIABLO 3</h4>
          <p class="card-text">Diablo III to fabularna gra akcji rozgrywającą się w mrocznym świecie Sanktuarium. Wcielasz się w potężnego bohatera. Prowadząc go do walki, będziesz musiał wykazać się refleksem i umiejętnością podejmowania taktycznych decyzji.W kilka sekund kładziemy pokotem dziesiątki piekielnych monstrów.</p>
          <h5 class="card-text">CENA:89,99zł</h5>
          <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="4">
          <input type="hidden" name="nazwa" value="Diablo 4">
           <input type="hidden" name="cena" value="89.99">
          <button class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0">
        <img src="img/god.jpg" class="card-img-top" alt="god of war">
        <div class="card-body">
          <h4 class="card-title">GOD OF WAR</h4>
          <p class="card-text">Protagonistą historii jest Kratos, wojownik pochodzący ze Sparty, który przez lata służył bogowi wojny Aresowi, ale ostatecznie wszedł w układ z pozostałymi bogami olimpijskimi. Teraz jego misją jest zabicie dawnego zwierzchnika. W tym celu musi zdobyć puszkę Pandory.Ukończenie gry w pełni powinno ci zająć około 60-70 godzin.</p>
          <h5 class="card-text">CENA:69,99zł</h5>
        <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="5">
          <input type="hidden" name="nazwa" value="God of war">
           <input type="hidden" name="cena" value="69.99">
          <button class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0 ">
        <img src="img/hogwarts.jpg" class="card-img-top" alt="hogwarts legacy">
        <div class="card-body">
          <h4 class="card-title">HOGWARTS LEGACY</h4>
          <p class="card-text">Dziedzictwo Hogwartu to wciągająca gra akcji RPG z otwartym światem, który po raz pierwszy pojawił się w książkach o Harrym Potterze. Przeżyj przygodę w XIX-wiecznym Hogwarcie. Wciel się w postać dzierżącą klucz do antycznego sekretu, który może podzielić świat magii. Fabuła gry, osadzona w XIX wieku, koncentruje się na jednym z uczniów Hogwartu. </p>
          <h5 class="card-text">CENA:239,99zł</h5>
        <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="6">
          <input type="hidden" name="nazwa" value="Hogwarts Legacy">
           <input type="hidden" name="cena" value="239.99">
          <button class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0 ">
        <img src="img/battlefield.jpg" class="card-img-top" alt="Battlefield">
        <div class="card-body">
          <h4 class="card-title">BATTLEFIELD 2042</h4>
          <p class="card-text">Battlefield 2042 to powrót do wojny totalnej, z której słynie ta kultowa seria gier. Dynamicznie zmieniające się pola bitew będą wymagały od ciebie adaptacji i przezwyciężania trudności przy pomocy twojej drużyny i nowoczesnego arsenału. Filarem gry Battlefield 2042 jest tryb multiplayer nazwany Wojna Totalna</p>
          <h5 class="card-text">CENA:159,99zł</h5>
        <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="7">
          <input type="hidden" name="nazwa" value="Battlefield 2042">
           <input type="hidden" name="cena" value="159.99">
          <button class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-6">
      <div class="card mb-4 border-0 ">
        <img src="img/farming.jpg" class="card-img-top" alt="farming simulator">
        <div class="card-body">
          <h4 class="card-title">FARMING SIMULATOR 22</h4>
          <p class="card-text">To najnowsza odsłona popularnej serii symulatorów życia rolnika. Tradycyjnie obejmujemy kontrolę nad gospodarstwem, uprawiamy rolę, hodujemy zwierzęta i korzystamy z setek autentycznych narzędzi gospodarczych. Poradnik do gry Farming Simulator 22 ma na celu wprowadzić każdego z graczy w świat wirtualnego farmingu.</p>
          <h5 class="card-text">CENA:169,99zł</h5>
        <form action="koszyk.php" method="POST">
          <input type="hidden" name="produkt_id" value="8">
          <input type="hidden" name="nazwa" value="Farming Simulator">
           <input type="hidden" name="cena" value="169.99">
          <button class="btn btn-primary" type="submit">Do koszyka</button>
        </form>
        </div>
      </div>
    </div>
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
