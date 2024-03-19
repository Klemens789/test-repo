<?php
echo "<h2 style=\"color:red\">Witaj " . $_POST["imie"] ." ". $_POST["nazwisko"] . "</h2><br>";
echo  "<h4>Uczelnia:</h4>"." ".$_POST["uczelnia"];
echo "<br>";
echo "<h4>Płeć i Wiek:</h4>"." ".$_POST["płeć"]." ".$_POST["wiek"];
echo "<h4>Ulubiony przedmiot:</h4>";
foreach($_POST["subject"] as $wartosc){
    echo $wartosc;
    echo "<br>";
}
echo "<h4>Dlaczego jest popularna?:</h4>";
foreach($_POST["wybor"] as $zmienna){
   echo $zmienna;
}
echo"<h4>Opinia o infie<h4>"." ".$_POST['my_textarea'];
echo"<h4>Wykłady matma<h4>"." ".$_POST['wyklad'];
echo"<h4>Data góry<h4>"." ".$_POST['gory'];
echo"<h4>Twój kolor<h4>"." ".$_POST['color'];
echo"<h4>Suwak jest równy=<h4>".$_POST['slider'];

echo"<h4>Akceptuje zasady<h4>".$_POST['akceptuje'];







?>