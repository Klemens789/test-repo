<?php
include "zajecia.php";
$login=$_POST["login"];
$email=$_POST["email"];
$haslo=$_POST["haslo"];

$sql="SELECT login from uzytkownicy where login='$login';";
$dodanie="INSERT into uzytkownicy (login,email,haslo) Values('$login','$email','$haslo')";
$sql2=mysqli_query($conn,$sql);
if (mysqli_num_rows($sql2)== 0)
{
    mysqli_query($conn,$dodanie);
    echo"<br>";
    echo "Konto zostało utworzone!";
} 
else echo "Podany login jest już zajęty.";
?>