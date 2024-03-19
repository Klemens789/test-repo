<?php
echo "<h2 style=\"color:red\">Witaj " . $_POST["imie"] ." ". $_POST["nazwisko"] . "</h2><br>";
echo  "Pełnoletni"." ".$_POST["wiek"];
echo "<br>";
foreach($_POST["hobby"] as $wartosc){
    echo $wartosc;
    echo "<br>";
}
?>