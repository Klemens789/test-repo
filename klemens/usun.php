<?php
include "zajecia.php";
if(!$conn){
    die("Bład poloczenia: ".mysqli_connect_error());
    exit;}
    echo "Poloczono z baza";
$idget=$_GET["id"];
$sql="delete from towar where id=$idget;";
$wynik=mysqli_query($conn,$sql);
  echo "<br>";
  if($wynik){
    echo "zapytanie delete poprawne";}
    else {
        echo "Bład zapytania: ". mysqli_error($conn);
    }
  header("Location: main.php");
?>