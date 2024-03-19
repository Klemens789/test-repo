<?php
$x = 10;
$imie = "Klemens";
$nazwisko ="Mulica";
$kierunek="Informatyka";
$adres="Nowy targ";
echo "<h2 style=\"color:red\">Witaj " . $imie ." ".$nazwisko ."</h2><br>";
echo "<h3 style=\"color:green\">Jesteś studentem " . $kierunek . "</h3><br>";
echo "<h4 style=\"color:blue\">Miejscowosc " . $adres . "</h4><br>";
$zm=10;
for($i=0;$i<10;$i++){
    echo"$i";
}
for($i=0;$i<10;$i++){

    if($i%2==1){
        $zm=rand($i*5,$i*10);
        echo "<article style=\"background-color:aqua; width:".$zm."%; height:20%; color:red; text-align:center;\">" . $i ."</article>";
        
      }else{
        $zm=rand($i*2,$i*7);
        echo "<article style=\"background-color:grey; width:30%; height:20%; color:pink; text-align:center;\">" . $i ."</article>";
      }
   }
  $kol=10;
  $wiersz=10;
   
  echo "<table border=\"1\">";
  for($a=1;$a<=$wiersz;$a++){
    echo "<tr>";
    for($c=1;$c<=$kol;$c++){
        echo "<td>" .$c*$a. "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
   
$tab=array("zwierz" => "kot", "cena" => 128 , "owoc" => "jabłko");
foreach($tab as $wartosc){
    echo $wartosc."<br>";
}
foreach($tab as $klucz => $wartosc){
    echo $klucz."->".$wartosc."<br>";
}